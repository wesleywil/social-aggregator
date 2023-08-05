<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'social_aggregator.user';

    public function getUser($userId)
    {
        return $this->where(['id' => $userId])->first();
    }
}