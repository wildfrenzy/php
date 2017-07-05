<?php

namespace App\Http\Controllers;


use App\Post;

class PostController extends Controller {

    public function index() {
//        $post = $this->fetchPost();
        $post = Post::find(1);

        return view('posts', [
            'post' => $post
        ]);
    }

        public function createOnVisit() {
        $post = new Post();
        $post->name = 'Ne parsya';
        $post->description = 'test desc';
        if($post->save()) {
            dd('Ok');
        }

        dd('ne ok');
    }
    private function fetchPost() {
        $post = new Post();
        $post->name = 'name1';
        return $post;
    }
}