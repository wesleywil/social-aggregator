<?php

namespace App\Models;

use CodeIgniter\Model;

class SocialsModel extends Model
{
    protected $table = 'social_aggregator.socials';

    protected $allowedFields = ['facebook', 'twitter', 'tiktok', 'instagram', 'youtube', 'linkedin', 'userId'];

    public function getSocials($userId)
    {
        return $this->where(['userId' => $userId])->first();
    }
}