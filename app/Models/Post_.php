<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fitano Pranata",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse fugiat repellat, amet voluptate quidem, reprehenderit alias ad ipsa atque sit inventore cumque illum modi tempora exercitationem maiores sint suscipit consectetur cupiditate nulla officiis rem veritatis deserunt! Expedita sunt minima culpa harum nisi blanditiis at consequuntur placeat consequatur ducimus provident, non natus unde molestiae in quis tempore enim dolore consectetur architecto soluta aliquid quam! Accusantium fuga cumque non deleniti adipisci assumenda magnam similique odit. Quis eos autem dolor mollitia facilis voluptatum explicabo quaerat fugit beatae doloribus excepturi, consequatur praesentium sit repudiandae quod porro deleniti exercitationem ipsam ex placeat? Aut, eligendi molestiae."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "litlesugar",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse fugiat repellat, amet voluptate quidem, reprehenderit alias ad ipsa atque sit inventore cumque illum modi tempora exercitationem maiores sint suscipit consectetur cupiditate nulla officiis rem veritatis deserunt! Expedita sunt minima culpa harum nisi blanditiis at consequuntur placeat consequatur ducimus provident, non natus unde molestiae in quis tempore enim dolore consectetur architecto soluta aliquid quam! Accusantium fuga cumque non deleniti adipisci assumenda magnam similique odit. Quis eos autem dolor mollitia facilis voluptatum explicabo quaerat fugit beatae doloribus excepturi, consequatur praesentium sit repudiandae quod porro deleniti exercitationem ipsam ex placeat? Aut, eligendi molestiae."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
