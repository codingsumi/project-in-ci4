<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class CareerController extends BaseController
{
    public function index()
    {
        return view('frontend/career/index');
    }

    public function apply()
    {
        return view('frontend/career/apply');
    }
}
