<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus aut laborum tempore corrupti harum maiores aspernatur consectetur doloribus reiciendis exercitationem molestias natus cumque doloremque, placeat aliquam saepe quod ipsum nesciunt."
        ],
        [
            "title" => "Judul Posts Imam",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel asperiores non molestias, quod itaque libero! Blanditiis amet consequuntur sapiente totam itaque! Commodi quibusdam vitae aliquam sint sapiente rem perspiciatis iste dolor velit dolorum aliquid adipisci nemo veniam illum, nulla nobis! Quia itaque adipisci quas quam eum ducimus natus veritatis atque nihil blanditiis iure perspiciatis voluptas ex odio sed tenetur, optio cum eos incidunt. Impedit aperiam repellat quam eius culpa soluta exercitationem non tempore veritatis, voluptatem aliquam, dicta quasi. Dolores maxime, delectus non nisi enim ex vel maiores fugit. Minus molestiae vel molestias qui temporibus voluptatem odit excepturi iure cupiditate ex!"
        ],
    ];

    public static function all () {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }

}
