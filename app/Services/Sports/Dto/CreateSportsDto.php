<?php

namespace App\Services\Sports\Dto;

use App\Http\Requests\CreateSportsRequest;

class CreateSportsDto
{
    public string $name;

    public function __construct(CreateSportsRequest $createSportsRequest)
    {
        $this->name = $createSportsRequest->get('name');    
    }

    public function getName()
    {
        return $this->name;
    }
}