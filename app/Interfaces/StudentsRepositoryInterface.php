<?php

namespace App\Interfaces;
use App\Services\Students\Dto\UpdateStudentDto;

interface StudentsRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function delete($id);
    public function update($id, UpdateStudentDto $updateStudentsDto);
    public function save($student);
}