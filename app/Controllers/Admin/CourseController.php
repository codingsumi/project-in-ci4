<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CourseController extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $db = \Config\Database::connect();
        $table = $db->table('course');
        if ($this->request->getVar('add')) {
            $file = $this->request->getFile('upload_file');
            $rename = $file->getRandomName();
            $path = 'uploads/courses/' . $rename;

            if ($file->isValid() && !$file->hasMoved()) {
                $file->move(ROOTPATH . 'public/uploads/courses/', $rename);

                $cdata = [
                    'course_name' => $this->request->getPost('course'),
                    'course_file' => $path,
                    'course_desc' => $this->request->getPost('desc'),
                    'seat'        => $this->request->getPost('seat'),
                    'duration'    => $this->request->getPost('duration'),
                ];
                if ($this->isOnline()) {
                    if ($table->insert($cdata)) {
                        return redirect()->back()->with('success', 'Course Added Successfully');
                    } else {
                        return redirect()->back()->withInput()->with('error', 'Something went wrong');
                    }
                } else {
                    return redirect()->back()->withInput()->with('error', 'Please check your internet connectivity');
                }
            }
        } else {
            $courses = $table->get()->getResult();
            return view('backend/course', compact('courses'));
        }
    }

    public function trash($id)
    {
        if (!empty($id)) {
            $id = base64_decode(rawurldecode($id));
            $db = \Config\Database::connect();
            $table = $db->table('course');
            $check = $table->getWhere(['course_id' => $id])->getRow();
            if ($check) {
                $table->where('course_id', $id);
                if ($table->delete()) {
                    if (!empty($check->course_file)) {
                        if (file_exists('./' . $check->course_file)) {
                            unlink('./' . $check->course_file);
                        }
                    }
                    return redirect()->back()->with("success", 'Course deleted successfully');
                } else {
                    return redirect()->back()->with("error", 'Something went wrong');
                }
            } else {
                return redirect()->back()->with("error", "Invalid value");
            }
        }
    }

    public function edit($id)
    {
        if ($this->request->getVar('update')) {
            // $path = "";
            $id = base64_decode(rawurldecode($id));
            $db = \Config\Database::connect();
            $table = $db->table('course');
            $check = $table->getWhere(['course_id' => $id])->getRow();
            if ($check) {
                $file = $this->request->getFile('upload_file');
                if (!file_exists($file)) {
                    $path = $check->course_file;
                } else {
                    $rename = $file->getRandomName();
                    $path = 'uploads/courses/' . $rename;
                    if ($file->isValid() && !$file->hasMoved()) {
                        $file->move(ROOTPATH . 'public/uploads/courses/', $rename);
                    }
                }
                $cdata = [
                    'course_name' => $this->request->getPost('course'),
                    'course_file' => $path,
                    'course_desc' => $this->request->getPost('desc'),
                    'seat'        => $this->request->getPost('seat'),
                    'duration'    => $this->request->getPost('duration'),
                ];

                if ($this->isOnline()) {
                    $table->where('course_id', $id);
                    if ($table->update($cdata)) {
                        return redirect()->back()->with('success', 'Course updated successfully');
                    } else {
                        return redirect()->back()->with('error', 'Something went wrong');
                    }
                } else {
                    return redirect()->back()->withInput()->with('error', 'Please check your internet connectivity');
                }
            } else {
                return redirect()->back()->with("error", "Invalid value");
            }
        }
    }
}
