<?php

class IndexController extends BaseController{

    public function index()
    {
        $posts = [];
        foreach ((array)Post::findAll() as $post) {
            $posts[] = [
                'post' => $post,
                'user' => User::find(['_id' => new MongoId($post['user']->__toString() ) ])
            ];
        }

        View::make('index\index', [
            'posts' => $posts,
        ]);
    }

    public function post()
    {
        $title = Input::post('title');
        $text = Input::post('text');

        Post::insert([
            'title' => $title,
            'text'  => $text,
            'user'  => Session::get('user')['_id']
        ]);

        Core::redirect('/');
    }

}