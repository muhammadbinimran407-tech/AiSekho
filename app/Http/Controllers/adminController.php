<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Courses
    public function courseCreate(){
        return view('admin.courses.create');
    }

    public function courseIndex(){
        return view('admin.courses.index');
    }

    public function courseShow(){
        return view('admin.courses.show');
    }

    public function courseStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor_id' => 'required|exists:teachers,id',
        ]);

        Course::create($validatedData);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course created successfully!');
    }

    // Students
    public function studentIndex(){
        return view('admin.student.index');
    }

    public function studentShow(){
        return view('admin.student.show');
    }

    // Teachers
    public function teacherCreate(){
        return view('admin.teacher.create');
    }

    public function teacherIndex(){
        return view('admin.teacher.index');
    }

    public function teacherShow(){
        return view('admin.teacher.show');
    }

    public function teacherStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'specialty' => 'required|string|max:255',
        ]);

        Teacher::create($validatedData);

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher created successfully!');
    }
}
