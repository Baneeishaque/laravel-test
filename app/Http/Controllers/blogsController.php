<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class blogsController extends Controller {

    public function save(Request $request) {
        $blog = new blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        echo 'Saved Succesfully';
    }

    public function index() {
        return view('blog_addition');
    }

}