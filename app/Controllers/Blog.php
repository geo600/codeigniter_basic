<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'Codeigniter 4 Blog',
            'title' => 'This is a Blog Post'
        ];

        $posts = [
            'Title 1', 'Title 2', 'Title 3'
        ];
        $data['posts'] = $posts;

        // echo view('templates/header', $data);
        // return view('blog');
        // echo view('templates/footer');

        return view('blog', $data);
    }

    public function post()
    {
        $data = [
            'meta_title' => 'Codeigniter 4 Post Page',
            'title' => 'This is a Single Post Page'
        ];

        // echo view('templates/header', $data);
        return view('single_post', $data);
        // echo view('templates/footer');
    }
}
