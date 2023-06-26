<?php

namespace App\Scripts;

class ScriptList
{
    public static function getFileTree(array $lua)
    {
        $scripts = Script::getScripts();

        foreach ($lua as $script) {
            $info = pathinfo($script->path);

            $current = &$scripts;
            foreach (explode('/', $info['dirname']) as $part) {
                if (empty($part)) {
                    continue;
                }

                if (!isset($current[$part])) {
                    $current[$part] = [];
                }
                $current = &$current[$part];
            }

            $current[$info['basename'] . '|' . $script->luascriptid . '|' . $script->tokens] = "userscript:{$script->luascriptid}/{$script->path}";
        }
        ksort($scripts);
        return $scripts;
    }

    public static function getFiles(\App\Entities\User $user, bool $for_template)
    {
        $fileModel = new \App\Models\DeveloperFileModel();
        if ($for_template) {
            $luaModel = new \App\Models\LuaScriptModel();

            $folder = $fileModel->getApprovalFolder();
            $files = $luaModel->getPendingApproval();

            $dev_files = [];
            foreach ($files as $file) {
                $file['parentid'] = $folder->developerfileid;
                $dev_files[] = new \App\Entities\DeveloperFile($file);
            }
            $dev_files[] = $folder;

            $approved = $fileModel->getApprovedFolder();
            $dev_files = array_merge(
                $dev_files,
                self::fillFolderByLogin($fileModel->getApprovedFiles(), $approved, $fileModel)
            );
            $dev_files[] = $approved;

            $rejected = $fileModel->getRejectedFolder();
            $dev_files = array_merge(
                $dev_files,
                self::fillFolderByLogin($fileModel->getRejectedFiles(), $rejected, $fileModel)
            );
            $dev_files[] = $rejected;

            $dev_files = array_merge($dev_files, $fileModel->getTemplateFiles());
            return $dev_files;
        } else {
            return $fileModel->getFilesForUser($user);
        }
    }

    public static function getFiles_new(\App\Entities\User $user, bool $for_template)
    {
        $fileModel = new \App\Models\DeveloperFileModelNew();
        if ($for_template) {
            $luaModel = new \App\Models\LuaScriptModel();

            $folder = $fileModel->getApprovalFolder();
            $files = $luaModel->getPendingApproval();

            $dev_files = [];
            foreach ($files as $file) {
                $file['parentid'] = $folder->developerfileid;
                $dev_files[] = new \App\Entities\DeveloperFile($file);
            }
            $dev_files[] = $folder;

            $approved = $fileModel->getApprovedFolder();
            $dev_files = array_merge(
                $dev_files,
                self::fillFolderByLogin($fileModel->getApprovedFiles(), $approved, $fileModel)
            );
            $dev_files[] = $approved;

            $rejected = $fileModel->getRejectedFolder();
            $dev_files = array_merge(
                $dev_files,
                self::fillFolderByLogin($fileModel->getRejectedFiles(), $rejected, $fileModel)
            );
            $dev_files[] = $rejected;

            $dev_files = array_merge($dev_files, $fileModel->getTemplateFiles());
            return $dev_files;
        } else {
            return $fileModel->getFilesForUser($user);
        }
    }

    private static function fillFolderByLogin(array $files, \App\Entities\DeveloperFile $parent, \App\Models\DeveloperFileModel $fileModel)
    {
        $parentids = [];
        $parents = [];

        foreach ($files as $file) {
            if (!isset($parentids["{$file->userid}"])) {
                $userfolder = $fileModel->getUserFolder(
                    $file->userid,
                    $file->login,
                    $parent
                );

                $parents[] = $userfolder;
                $parentids["{$file->userid}"] = $userfolder->developerfileid;
            }

            $file->parentid = $parentids["{$file->userid}"];
        }

        return array_merge($files, $parents);
    }

    public static function convertToTree(array $files)
    {
        $parents = ["f-0" => []];
        $tree = &$parents['f-0'];

        foreach ($files as $file) {
            $parentid = $file->parentid;
            if (!preg_match('/^(?:approve|approved|rejected)(?:\-[0-9]+)?$/', $parentid)) {
                $parentid = intval($file->parentid);
            }
            if (!isset($parents["f-$parentid"])) {
                $parents["f-$parentid"] = [];
            }

            if ($file->isDirectory()) {
                $key = 'f-' . $file->developerfileid;
                if (!isset($parents[$key])) {
                    $parents[$key] = [];
                }
                $parents["f-$parentid"][$file->name . '|' . $file->developerfileid] = &$parents[$key];
            } else {
                $parents["f-$parentid"][$file->name . '|' . $file->developerfileid] = $file->name;
            }
        }

        return $tree;
    }

    public static function getScriptByPathInformation(array $path_information, string $hex, ?\App\Entities\User $user) : ?Script
    {
        $luaModel = new \App\Models\LuaScriptModel();

        if ($path_information['type'] == 'lua') {
            $lua = $luaModel->getById($path_information['id']);
            if (!$lua || (!$lua->published_at && (!$user || !$user->canManageTemplates()))) {
                return null;
            }

            if ($path_information['path'] != $lua->path) {
                return null;
            }

            $script = new \App\Scripts\LuaScript($hex);
            $script->setResultCode(file_get_contents(WRITEPATH . 'scripts/' . $path_information['id'] . '.get.lua'));
            $script->setCalculateCode(file_get_contents(WRITEPATH . 'scripts/' . $path_information['id'] . '.calc.lua'));
            $script->setPrefix($lua->prefix);

            $fileModel = new \App\Models\DeveloperFileModel();
            $file = $fileModel->getById($lua->developerfileid);
            if ($file->imageid) {
                if ($lua->published_at) {
                    $script->setImage('script/image/' . $lua->luascriptid);
                } else {
                    $script->setImage('developer/image/' . $file->imageid);
                }
            }

            $script->setScriptType($file->script_type);

            if ($lua->published_at) {
                $script->setImages($fileModel->getImages($file), 'script/helpimage/' . $lua->luascriptid . '/');
            } else {
                $script->setImages($fileModel->getImages($file), 'developer/image/');
            }

            return $script;
        } else {
            return Script::getScript($path_information['full_path'], $hex);
        }
    }

    public static function getPathInformation(string $path) : array
    {
        if (preg_match('#^userscript\:([0-9]+)/(.*)$#', $path, $matches)) {
            return [
                'id' => $matches[1],
                'full_path' => $path . '.lua',
                'type' => 'lua',
                'path' => $matches[2] . '.lua'
            ];
        } else {
            return [
                'full_path' => $path . '.php',
                'type' => 'php'
            ];
        }
    }
}