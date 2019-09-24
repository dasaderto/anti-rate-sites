<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id){
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id',$id)->count('id');
        $top_authors = User::orderBy('rate','desc')->limit(10)->get();

        return view('details',[
            'post' => $post,
            'comments' => $comments,
            'top_authors'=> $top_authors
        ]);
    }
}
