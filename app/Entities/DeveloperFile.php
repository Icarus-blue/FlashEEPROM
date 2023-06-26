<?php

namespace App\Entities;

use CodeIgniter\Entity;

class DeveloperFile extends Entity
{
    public const NO_DIRECTORY = 0;
    public const DIRECTORY_SCRIPTS = 1;
    public const DIRECTORY_IMAGES = 2;
    public const DIRECTORY_TEMPLATES = 3;
    public const DIRECTORY_APPROVAL = 4;
    public const DIRECTORY_APPROVED = 5;
    public const DIRECTORY_REJECTED = 6;
    
    public const STATUS_DEVELOPING = 0;
    public const STATUS_REQUESTED = 1;
    public const STATUS_PUBLISHED = 2;
    public const STATUS_REJECTED = 3;
    
    public const TYPE_REGULAR = 0;
    public const TYPE_READ = 1;
    
    public static function isValidType(int $type): bool
    {
        return $type >= 0 && $type <= 1;
    }
    
    public function canBeEdited(): bool
    {
        return $this->status == self::STATUS_DEVELOPING;
    }
    
    public function isDirectory(): bool
    {
        return $this->directory_type > 0;
    }
    
    public function isScriptDirectory(): bool
    {
        return $this->directory_type == self::DIRECTORY_SCRIPTS;
    }
    
    public function isImageDirectory(): bool
    {
        return $this->directory_type == self::DIRECTORY_IMAGES;
    }
    
    public function canBeRenamedOrDeleted(bool $canEditTemplates): bool
    {
        if ($this->isDirectory()) {
            if ($this->isTemplateDirectory()) {
                return $this->parentid != null && $canEditTemplates;
            } else {
                return ($this->isScriptDirectory()
                    || $this->isImageDirectory())
                    && $this->parentid != null;
            }
        } else {
            if ($this->isScript()) {
                if ($this->is_template) {
                    return $canEditTemplates;
                } else {
                    return $this->canBeEdited();
                }
            } else {
                return true;
            }
        }
    }
    
    public function isTemplateDirectory(): bool
    {
        return $this->directory_type == self::DIRECTORY_TEMPLATES;
    }
    
    public function isScript(): bool
    {
        if ($this->isDirectory()) {
            return false;
        }
        
        if (substr($this->name, -4) != '.lua') {
            return false;
        }
        
        return true;
    }
    
    public function isImage(): bool
    {
        return !$this->isDirectory() && !$this->isScript();
    }
}
