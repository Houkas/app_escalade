<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($id){

        $post = \DB::table('posts')->where('id', $id)->first();
        
        return view('post', [
            'post' => $post
        ]);
        
    }
}
