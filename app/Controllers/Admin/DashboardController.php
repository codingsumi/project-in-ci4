<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $course         = count($db->table('course')->get()->getResult());
        $student        = count($db->table('student')->get()->getResult());
        $faculty        = count($db->table('faculty')->get()->getResult());
        $announcement   = count($db->table('announcement')->get()->getResult());
        $notice         = count($db->table('notices')->get()->getResult());
        $activity       = count($db->table('activities')->get()->getResult());
        return view("backend/dashboard", compact('course', 'student', 'faculty', 'announcement', 'activity', 'notice'));
    }
}
