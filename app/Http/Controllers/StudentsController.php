<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentsRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Interfaces\SportRepositoryInterface;
use App\Interfaces\StudentsRepositoryInterface;
use Illuminate\Http\Request;
use App\Services\Students\Action\CreateStudentAction;
use App\Services\Students\Dto\CreateStudentsDto;
use App\Services\Students\Dto\UpdateStudentDto;

class StudentsController extends Controller
{
    private StudentsRepositoryInterface $studentRepository;
    private SportRepositoryInterface $sportRepositroy;
    private CreateStudentAction $createStudentAction;

    public function __construct(
        StudentsRepositoryInterface $studentRepository,
        SportRepositoryInterface $sportRepositroy,
        CreateStudentAction $createStudentAction
    )
    {
        $this->studentRepository = $studentRepository;
        $this->sportRepositroy = $sportRepositroy;
        $this->createStudentAction = $createStudentAction;
    }

    public function index() 
    {
        $sports = $this->sportRepositroy->getAll();
        $students = $this->studentRepository->getAll();
        return view('students.index', [
            'students' => $students,
            'sports' => $sports,
        ]);
    }

    public function getById($id)
    {
        $sports = $this->sportRepositroy->getAll();
        $student = $this->studentRepository->getById($id);
        return view('students.single', [
            'student' => $student,
            'sports' => $sports,
        ]);
    }

    public function store(CreateStudentsRequest $request)
    {
        $dto = new CreateStudentsDto($request);
        $this->createStudentAction->execute($dto);
        return redirect('students/');
    }

    public function update($id, UpdateStudentRequest $request) 
    {
        $updateStudentDto = new UpdateStudentDto($request);
        $this->studentRepository->update($id, $updateStudentDto);
        return redirect('students/'.$id);
    }

    public function delete($id)
    {
        $this->studentRepository->delete($id);
        return redirect('students/');
    }
}
