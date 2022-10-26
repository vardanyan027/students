<?php

namespace App\Repositories;

use App\Interfaces\SportRepositoryInterface;
use App\Models\Sports;

class SportRepository implements SportRepositoryInterface
{
    public function getAll()
    {
        return Sports::all();
    }

    public function save($sport)
    {
        return $sport->save();
    }
}