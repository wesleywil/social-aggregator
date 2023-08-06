<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'social_aggregator.user';

    protected $allowedFields = ['name', 'username', 'email', 'password'];

    public function getUser($userId)
    {
        return $this->where(['id' => $userId])->first();
    }
}