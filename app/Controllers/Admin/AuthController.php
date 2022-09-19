<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function login()
    {
        $db = \Config\Database::connect();
        $table = $db->table('users');
        $request = service('request');
        $output = "";
        if ($request->getPost('username')) {
            $username = $request->getPost('username');
            $password = $request->getPost('password');
            $check = $table->getWhere(['user_email' => $username])->getRow();
            if ($check) {
                if ($password == $check->password) {
                    $user['logged_in'] = [
                        'username' => $check->username,
                        'role' => $check->user_type,
                        'user_email' => $username
                    ];
                    session()->set($user);
                    $output .= 'success';
                } else {
                    $output .= "error1";
                }
            } else {
                $output .= "error2";
            }
        } else {
            return view('backend/login');
        }
        echo $output;
    }

    public function logout() {
        session()->destroy();
        return redirect()->to(base_url('admin'))->with('success', 'You are now logged out');
    }
}
