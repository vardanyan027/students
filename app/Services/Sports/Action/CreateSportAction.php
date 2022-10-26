<?php

namespace App\Services\Sports\Action;

use App\Services\Sports\Dto\CreateSportsDto;
use App\Interfaces\SportRepositoryInterface;
use App\Models\Sports;

class CreateSportAction
{

    private SportRepositoryInterface $sportRepository;

    public function __construct(SportRepositoryInterface $sportRepository)
    {
        $this->sportRepository = $sportRepository;
    }


    public function execute(CreateSportsDto $createSportsDto): Sports
    {
        $sport = Sports::create($createSportsDto);
        $this->sportRepository->save($sport);
        return $sport;   
    }
}