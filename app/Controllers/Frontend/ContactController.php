<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use CodeIgniter\Commands\Server\Serve;

class ContactController extends BaseController
{
    public function index()
    {
        return view('frontend/contact-us');
    }

    public function sendmail()
    {
        $validate = $this->validate([
            'name'      => 'trim|required|min_length[5]|max_length[20]|string|alpha_space',
            'email'     => 'trim|required|valid_email',
            'phone'     => 'trim|required|numeric|exact_length[10]',
            'subject'   => 'trim|required|min_length[10]|max_length[50]|string',
            'message'   => 'trim|required|string|min_length[10]|max_length[255]',
        ]);

        if (!$validate) {
            return view('frontend/contact-us', ['validation' => $this->validator]);
        } else {
            $db = \Config\Database::connect();
            $table = $db->table('contact');
            $request = service('request');

            // check internet connection
            if ($this->isOnline()) {
                $conData = [
                    'cont_name'     => $request->getPost('name'),
                    'cont_email'    => $request->getPost('email'),
                    'cont_phone'    => $request->getPost('phone'),
                    'cont_subj'     => $request->getPost('subject'),
                    'cont_msg'      => $request->getPost('message'),
                    'token'         => $request->getPost('csrf_test_name'),
                ];

                if($table->insert($conData)) {
                    return redirect()->back()->with('success', 'Thankyou for contacting us ! we will revert to as soon as Possible');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Something went wrong');
                }
            } else {
                return redirect()->back()->with('error', 'Internal Connection failed');
            }
        }
    }

    // private function isOnline($site = 'https://www.youtube.com')
    // {
    //     if (@fopen($site, 'r')) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
