<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('frontend/home');
    }

    public function account_information() {
        return view('frontend/account-information');
    }

    public function ragging() {
        return view('frontend/anti-ragging');
    }

    public function alumni() {
        return view('frontend/alumni-association');
    }

    public function notice() {
        return view('frontend/notice/index');
    }

     public function brochures() {
        return view('frontend/brochures');
    }
    

}
