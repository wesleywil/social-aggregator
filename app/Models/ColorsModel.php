<?php

namespace App\Models;

use CodeIgniter\Model;

class ColorsModel extends Model
{
    protected $table = 'social_aggregator.colors';

    public function getColors($userId)
    {
        return $this->where(['userId' => $userId])->first();
    }
}