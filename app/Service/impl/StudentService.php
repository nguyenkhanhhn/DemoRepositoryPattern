<?php


namespace App\Service\impl;


use App\Repositories\Contract\StudentRepositoryInterface;
use App\Service\StudentServiceInterface;
use App\Students;

class StudentService implements StudentServiceInterface
{
    protected $studentRepositoryInterface;

    public function __construct(StudentRepositoryInterface $studentRepositoryInterface)
    {
        $this->studentRepositoryInterface = $studentRepositoryInterface;
    }

    public function getAll()
    {
        $result = $this->studentRepositoryInterface->getAll();
        return $result;
    }

    public function create($request)
    {
        $student = new Students();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->address = $request->address;
        $this->studentRepositoryInterface->create($student);
    }

    public function getById($id)
    {
        return $this->studentRepositoryInterface->getById($id);
    }

    public function update($request, $id)
    {
        $student = $this->studentRepositoryInterface->getById($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->address = $request->address;
        $this->studentRepositoryInterface->create($student);
    }

    public function delete($id)
    {
        $student = $this->studentRepositoryInterface->getById($id);
        return $this->studentRepositoryInterface->delete($student);
    }
}
