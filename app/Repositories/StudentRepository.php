<?php

namespace App\Repositories;

use App\Interfaces\StudentsRepositoryInterface;
use App\Models\Students;
use App\Services\Students\Dto\UpdateStudentDto;

class StudentRepository implements StudentsRepositoryInterface
{
    public function getAll()
    {
        return Students::all();
    }

    public function getById($id): Students
    {
        return Students::findOrFail($id);
    }

    public function delete($id)
    {
        return Students::destroy($id);
    }

    public function update($id, UpdateStudentDto $updateStudentsDto)
    {
        $student = $this->getById($id);
        $student->setFirstName($updateStudentsDto->getFirstName());
        $student->setLastName($updateStudentsDto->getLastName());
        $student->setDateBirth($updateStudentsDto->getDateBirth());
        $student->setEmail($updateStudentsDto->getEmail());
        $student->setPhoneNumber($updateStudentsDto->getPhoneNumber());
        $this->save($student);
        $student->studentSports()->detach();
        $student->studentSports()->attach($updateStudentsDto->getSportIds());
    }

    public function save($student)
    {
        return $student->save();
    }
}