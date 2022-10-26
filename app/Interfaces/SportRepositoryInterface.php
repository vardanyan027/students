<?php

namespace App\Interfaces;

use App\Models\Sports;

interface SportRepositoryInterface 
{
    public function getAll();
    public function save($sport);
}