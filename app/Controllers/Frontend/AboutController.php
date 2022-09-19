<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;

class AboutController extends BaseController
{
    public function about() {
        return view('frontend/about/about-us');
    }

    public function secretary() {
        return view('frontend/about/secretary-message');
    }

    public function glance() {
        return view('frontend/about/college-at-glance');
    }

    public function mission_vision() {
        return view('frontend/about/mission-vision');
    }

    public function objective() {
        return view('frontend/about/objective');
    }

    public function management() {
        return view('frontend/about/management');
    }

    public function disclosure() {
        return view('frontend/about/mandatory-disclosure');
    }   
}
