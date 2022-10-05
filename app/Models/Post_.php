<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fauzan Agra Pracasta",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum corrupti facilis alias aliquam hic optio rerum non iusto facere exercitationem a sed earum recusandae tenetur animi laudantium ipsam architecto, unde placeat cum, nihil aperiam repudiandae impedit. Optio dolores quae nulla, dicta voluptates sequi repudiandae sed deleniti cum vero pariatur mollitia voluptate omnis nisi exercitationem quaerat perspiciatis consectetur dolorem magnam fugiat, odit ipsum recusandae! Sunt quasi ducimus officiis autem voluptatibus eius assumenda, animi, blanditiis nesciunt voluptatem perferendis provident! Ipsam, tempora nostrum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizky Dwi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quis dignissimos facere. Eos magnam autem facere quam, consequuntur odit nihil corporis nemo adipisci voluptas aliquid minima et temporibus, veniam ullam iste minus animi vitae. Voluptate porro maxime quos nihil placeat dicta soluta! Culpa, sunt. Mollitia, delectus, magnam, voluptatibus quibusdam temporibus recusandae architecto commodi earum molestias culpa non perferendis? Illo architecto quis quasi debitis maxime rem tempore explicabo dignissimos ipsa ab similique dolorum quod exercitationem perferendis ipsam blanditiis fugiat alias, tenetur autem doloremque velit quae temporibus odio neque. Magni nulla blanditiis quisquam aspernatur, perspiciatis ipsa odio molestiae, odit veritatis voluptatum ipsam?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
