<?php

namespace App\Http\Controllers;

use App\Service\StudentServiceInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $studentServiceInterface;

    public function __construct(StudentServiceInterface $studentServiceInterface)
    {
        $this->studentServiceInterface = $studentServiceInterface;
    }

    public function getAll()
    {
        $students = $this->studentServiceInterface->getAll();
        return view('Student.list', compact('students'));

    }

    public function create()
    {
        return view('Student.create');
    }

    public function store(Request $request)
    {
        $this->studentServiceInterface->create($request);
        return redirect()->route('student.list');
    }

    public function edit($id)
    {
        $student = $this->studentServiceInterface->getById($id);
        return view('Student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $this->studentServiceInterface->update($request, $id);
        return redirect()->route('student.list');
    }

    public function delete($id)
    {
        $this->studentServiceInterface->delete($id);
        return redirect()->route('student.list');
    }
}
