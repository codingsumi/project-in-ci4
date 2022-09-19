<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use Config\Services;

class AdmissionFormController extends BaseController
{
    // public function __construct() {
    //     \Config\Services::session();
    // }
    public function index()
    {
        return view('frontend/admission-form');
    }

    public function create()
    {
        $this->alert('info', 'Info !', 'We are working on the admission form.');
        return redirect()->back()->withInput()->with('error', 'We are working on the admission form');
    }

    public function inOnline($site = 'https://www.youtube.com')
    {
        if (@fopen($site, 'r')) {
            return true;
        } else {
            return false;
        }
    }

    
}
