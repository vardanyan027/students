<?php

namespace App\Services\Students\Action;

use App\Interfaces\StudentsRepositoryInterface;
use App\Models\Students;
use App\Services\Students\Dto\CreateStudentsDto;

class CreateStudentAction
{
    private StudentsRepositoryInterface $studentRepository;

    public function __construct(
        StudentsRepositoryInterface $studentRepository,
    )
    {
        $this->studentRepository = $studentRepository;
    }

    public function execute(CreateStudentsDto $createStudentsDto)
    {
        $student = Students::create($createStudentsDto);
        $this->studentRepository->save($student);
        $student->studentSports()->attach($createStudentsDto->getSportsId());
    }
}