<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page', 'blogs' => [
        [
            'id' => 1,
            'slug' => 'blog-1',
            'title' => 'Blog 1',
            'author' => 'Author 1',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste odit praesentium saepe. Velit quaerat reprehenderit, tempora inventore aliquam, molestiae incidunt mollitia unde suscipit harum possimus maxime voluptatibus delectus quis cupiditate?',
        ],
        [
            'id' => 2,
            'slug' => 'blog-2',
            'title' => 'Blog 2',
            'author' => 'Author 2',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste odit praesentium saepe. Velit quaerat reprehenderit, tempora inventore aliquam, molestiae incidunt mollitia unde suscipit harum possimus maxime voluptatibus delectus quis cupiditate?',
        ],
    ]]);
});

Route::get('/blog/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'blog-1',
            'title' => 'Blog 1',
            'author' => 'Author 1',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste odit praesentium saepe. Velit quaerat reprehenderit, tempora inventore aliquam, molestiae incidunt mollitia unde suscipit harum possimus maxime voluptatibus delectus quis cupiditate?',
        ],
        [
            'id' => 2,
            'slug' => 'blog-2',
            'title' => 'Blog 2',
            'author' => 'Author 2',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste odit praesentium saepe. Velit quaerat reprehenderit, tempora inventore aliquam, molestiae incidunt mollitia unde suscipit harum possimus maxime voluptatibus delectus quis cupiditate?',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
