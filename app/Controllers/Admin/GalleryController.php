<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class GalleryController extends BaseController
{
    public function photo()
    {
        $db = \Config\Database::connect();
        $table = $db->table('image_gallery');
        if ($this->request->getVar('add')) {
            $file = $this->request->getFile('upload_file');
            $rename = $file->getRandomName();
            $path = 'uploads/gallery/' . $rename;
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move(ROOTPATH . 'public/uploads/gallery/', $rename);

                $pdata = [
                    'img_gal_name' => $this->request->getVar('name'),
                    'img_gal_file' => $path,
                    'img_gal_desc' => $this->request->getVar('desc'),
                ];

                if ($this->isOnline()) {
                    if ($table->insert($pdata)) {
                        return redirect()->back()->with("success", "Photo gallery uploaded successfully.");
                    } else {
                        return redirect()->back()->withInput()->with('error', 'Something went wrong');
                    }
                } else {
                    return redirect()->back()->withInput()->with("error", "Please check your internet connection and try again");
                }
            }
        } else {
            $photos = $table->get()->getResult();
            return view('backend/photo', compact('photos'));
        }
    }

    public function edit($id)
    {
        if ($this->request->getVar('update')) {
            $id = base64_decode(rawurldecode($id));
            $db = \Config\Database::connect();
            $table = $db->table('image_gallery');
            $check = $table->getWhere(['img_gal_id' => $id])->getRow();
            if ($check) {
                $file = $this->request->getFile('upload_file');
                if (!file_exists($file)) {
                    $path = $check->img_gal_file;
                } else {
                    $rename = $file->getRandomName();
                    $path = 'uploads/gallery/' . $rename;
                    if ($file->isValid() && !$file->hasMoved()) {
                        $file->move(ROOTPATH . 'public/uploads/gallery', $rename);
                    }
                }

                $pdata = [
                    'img_gal_name' => $this->request->getVar('name'),
                    'img_gal_file' => $path,
                    'img_gal_desc' => $this->request->getVar('desc'),
                ];

                if ($this->isOnline()) {
                    $table->where('img_gal_id', $id);
                    if ($table->update($pdata)) {
                        return redirect()->back()->with("success", "Photo gallery updated successfully");
                    } else {
                        return redirect()->back()->with("error", "Something went wrong");
                    }
                } else {
                    return redirect()->back()->withInput()->with("error", "Please check your internet connection and try again");
                }
            } else {
                return redirect()->back()->with("error", "Invalid Value");
            }
        }
    }

    public function trash($id) {
        $id = base64_decode(rawurldecode($id));
        $db = \Config\Database::connect();
        $table = $db->table('image_gallery');
        $check = $table->getWhere(['img_gal_id' => $id])->getRow();
        if($check) {
            $table->where('img_gal_id', $id);
            if($table->delete()) {
                if(!empty($check->img_gal_file)) {
                    if(file_exists('./'.$check->img_gal_file)) {
                        unlink('./'.$check->img_gal_file);
                    }
                }
                return redirect()->back()->with("success", "Photo gallery deleted successfully");
            } else {
                return redirect()->back()->with("error", "Something went wrong");
            }
        } else {
            return redirect()->back()->with("error", "Invalid value");
        }
    }

    // video upload sections 

    public function video() {
        $db = \Config\Database::connect();
        $table = $db->table('videogallery');
        if($this->request->getVar('add')) {
            $vdata = ['title'=>$this->request->getVar('title'),'video' => $this->request->getVar('link')];
            if($this->isOnline()) {
                if($table->insert($vdata)) {
                    return redirect()->back()->with("success", "Video uploaded successfully");
                } else {
                    return redirect()->back()->with("error", "Something went wrong");
                }
            } else {
                return redirect()->back()->withInput()->with("error", "Please check your internet connection and try again");
            }
        } else {
            $videos = $table->orderBy('id', 'DESC')->get()->getResult();
            return view('backend/video', compact('videos'));
        }
    }

    public function editv($id) {
        if($this->request->getVar('update')) {
            $id = base64_decode(rawurldecode($id));
            $table = $this->connect()->table('videogallery');
            $check = $table->getWhere(['id'=> $id])->getRow();
            if($check) {
                $vdata = ['title'=>$this->request->getVar('title'),'video' => $this->request->getVar('link')];
                if($this->isOnline()) {
                    if($table->where('id', $id)->update($vdata)) {
                        return redirect()->back()->with("success", "Photo gallery updated successfully");
                    } else {
                        return redirect()->back()->with("error", "Something went wrong");
                    }
                } else {
                    return redirect()->back()->withInput()->with("error", "Please check your internet connection and try again");
                }
            } else {
                return redirect()->back()->with("error", "Invalid video id found ! Please try with a valid video");
            }
        }
    }

    public function trashv() {

    }
}
