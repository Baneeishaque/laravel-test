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
        $blog->description = $request->description;
        $blog->content = $request->content;
        $blog->save();
        echo 'Saved Succesfully';
    }

    public function index() {
        return view('blog_addition');
    }

    public function delete($id) {
        $blog = blog::find($id);
        $blog->delete();
        return back();
    }

    public function update(Request $request) {
        $blog = blog::find($request->id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->content = $request->content;
        $blog->save();
        return view('blog_addition');
    }

    public function edit($id) {
        $blog = blog::find($id);
        return view('blog_addition', ['id' => $id, 'title' => $blog->title, 'description' => $blog->description, 'content' => $blog->content]);
    }

    public function view() {
        return view('blog_view');
    }

    public function viewall() {
        $blog = new blog;
        $articles = $blog->all();
        return view('blog_view_all', ['articles' => $articles]);
    }

}
