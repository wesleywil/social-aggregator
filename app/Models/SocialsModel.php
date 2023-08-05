<?php

namespace App\Models;

use CodeIgniter\Model;

class SocialsModel extends Model
{
    protected $table = 'social_aggregator.socials';

    public function getSocials($userId)
    {
        return $this->where(['userId' => $userId])->findAll();
    }
}