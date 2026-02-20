<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function homePage()
    {
        return view('sites.home');
    }

    public function singleCourse()
    {
        return view('sites.course-detail');
  }



  public function allTeachers()
    {
        return view('sites.teachers');
    }

  public function singleTeacher()
    {
        return view('sites.teacher-detail');

}
}