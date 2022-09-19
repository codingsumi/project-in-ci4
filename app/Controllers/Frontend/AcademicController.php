<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class AcademicController extends BaseController
{
    public function courses()
    {
        $db = \Config\Database::connect();
        $table = $db->table('course');
        $courses = $table->get()->getResult();
        return view('frontend/academics/courses', compact('courses'));
    }

    public function admission_process()
    {
        return view('frontend/academics/admission-process');
    }

    public function academic_calendar()
    {
        return view('frontend/academics/academic-calendar');
    }

    public function recognition_approval()
    {
        return view('frontend/academics/recognition-approval');
    }
}
