<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Imam H",
        "email" => "acepimam19@gmail.com",
        "image" => "profile.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Imam H",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus aut laborum tempore corrupti harum maiores aspernatur consectetur doloribus reiciendis exercitationem molestias natus cumque doloremque, placeat aliquam saepe quod ipsum nesciunt."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dafran",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel asperiores non molestias, quod itaque libero! Blanditiis amet consequuntur sapiente totam itaque! Commodi quibusdam vitae aliquam sint sapiente rem perspiciatis iste dolor velit dolorum aliquid adipisci nemo veniam illum, nulla nobis! Quia itaque adipisci quas quam eum ducimus natus veritatis atque nihil blanditiis iure perspiciatis voluptas ex odio sed tenetur, optio cum eos incidunt. Impedit aperiam repellat quam eius culpa soluta exercitationem non tempore veritatis, voluptatem aliquam, dicta quasi. Dolores maxime, delectus non nisi enim ex vel maiores fugit. Minus molestiae vel molestias qui temporibus voluptatem odit excepturi iure cupiditate ex!"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Imam H",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus aut laborum tempore corrupti harum maiores aspernatur consectetur doloribus reiciendis exercitationem molestias natus cumque doloremque, placeat aliquam saepe quod ipsum nesciunt."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dafran",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel asperiores non molestias, quod itaque libero! Blanditiis amet consequuntur sapiente totam itaque! Commodi quibusdam vitae aliquam sint sapiente rem perspiciatis iste dolor velit dolorum aliquid adipisci nemo veniam illum, nulla nobis! Quia itaque adipisci quas quam eum ducimus natus veritatis atque nihil blanditiis iure perspiciatis voluptas ex odio sed tenetur, optio cum eos incidunt. Impedit aperiam repellat quam eius culpa soluta exercitationem non tempore veritatis, voluptatem aliquam, dicta quasi. Dolores maxime, delectus non nisi enim ex vel maiores fugit. Minus molestiae vel molestias qui temporibus voluptatem odit excepturi iure cupiditate ex!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});


