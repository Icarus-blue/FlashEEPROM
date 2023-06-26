<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Activity extends Entity
{
    public const REGISTER_TYPE = 'register';
    public const COMMENT_TYPE = 'comment';
    public const DOWNLOAD_TYPE = 'download';
    public const SHARE_TYPE = 'share';
}
