<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store()
    {
        $student = new Student;

        $student->name = request('name');
        $student->email = request('email');
        $student->phone = request('phone');
        $student->department = request('department');
        $student->age = request('age');

        $student->save();

        return redirect('/students');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    public function update($id)
    {
        $student = Student::find($id);

        $student->name = request('name');
        $student->email = request('email');
        $student->phone = request('phone');
        $student->department = request('department');
        $student->age = request('age');

        $student->save();

        return redirect('/students');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students');
    }
}
