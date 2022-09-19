<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class StudentController extends BaseController
{
    public function syllabus()
    {
        return view('frontend/student/syllabus');
    }

    public function routine()
    {
        return view('frontend/student/routine');
    }

    public function course_material()
    {
        return view('frontend/student/course-material');
    }

    public function online_class()
    {
        return view('frontend/student/online-class');
    }

    public function placement()
    {
        return view('frontend/student/placement');
    }
}
