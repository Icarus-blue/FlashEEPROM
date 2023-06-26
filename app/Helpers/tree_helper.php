<?php

function array_as_treeview($array, $opened = [], $show_tokens = false, $token_values = [])
{
    $result = '';

    foreach ($array as $name => $file) {
        $parts = explode('|', $name);
        $tokens = 10;
        if (count($parts) == 1) {
            $id = rand();
            if (!is_array($file) && isset($token_values[$file])) {
                $tokens = $token_values[$file];
            }
        } else {
            $id = $parts[1];
            $name = $parts[0];

            if (isset($parts[2])) {
                $tokens = intval($parts[2]);
            }
        }

        if (is_array($file)) {
            $class_name = 'folder';
            if (count($file) > 0) {
                $content = '<input type="checkbox" data-id="' . $id . '" id="folder-' . $id . '"' . (in_array($id, $opened) ? ' checked' : '') . '>';
                $content .= '<label for="folder-' . $id . '" data-id="' . $id . '" data-type="folder"><i class="bi-plus-square-dotted"></i><i class="bi-dash-square-dotted"></i>' . $name . '</label>';

                $content .= '<ul>';
                $content .= array_as_treeview($file, $opened, $show_tokens, $token_values);
                $content .= '</ul>';
            } else {
                $content = '<span data-id="' . $id . '" data-type="folder">' . $name . '</span>';
            }
        } else {
            $class_name = 'file';
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            if (!in_array($extension, ['php', 'lua', 'smt'])) {
                $class_name = 'image';
            }

            $file_clean = substr($file, 0, strrpos($file, '.'));
            $content = '<a href="/developer/smtgenerator/' . $id . '" style="text-decoration:none"><span class="file-container" data-type="' . $class_name
                . '" data-id="' . $id . '" data-path="' . $file_clean
                . '">' . substr($name, 0, strrpos($name, ".")) . ($show_tokens ? " ($tokens)" : '') . '</span></a>';
            $content = str_replace('<a href="', '<a href="' . base_url(), $content);
        }
        $result .= '<li class="' . $class_name . '">' . $content . '</li>';
    }
    return $result;
}