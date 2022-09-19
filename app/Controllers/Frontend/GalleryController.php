<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class GalleryController extends BaseController
{
    public function photo()
    {
        $db = \Config\Database::connect();
        $table = $db->table('image_gallery');
        $photos = $table->get()->getResult();
        return view('frontend/gallery/photo', compact('photos'));
    }

    public function video()
    {
        $db = \Config\Database::connect();
        $table = $db->table('videogallery');
        $videos = $table->get()->getResult();
        return view('frontend/gallery/video', compact('videos'));
    }
}
