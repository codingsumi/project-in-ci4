<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class BlogController extends BaseController
{
    public function index($id = null)
    {
        $db = \Config\Database::connect();
        $table = $db->table('blog');
        if(!empty($id)) {
            $blog = $table->getWhere(['id' => $id])->getRow();
            return view('frontend/blog/blog-details', compact('blog'));
        } else {
            $blogs = $table->get()->getResult();
            return view('frontend/blog/index', compact('blogs'));
        }
        
    } 
}
