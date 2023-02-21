<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Belajar Laravel",
            "slug" => "belajar-laravel",
            "author" => "buyung",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti atque vitae quibusdam ipsa consectetur suscipit! Iste, cumque. Soluta id neque minus natus unde fugiat expedita impedit reprehenderit tempora delectus!"
        ],
        [
            "title" => "Belajar Dasar",
            "slug" => "belajar-dasar",
            "author" => "dimd",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque cupiditate asperiores laborum voluptas veritatis aliquid alias dicta omnis fuga corporis, magni suscipit ea maiores voluptate necessitatibus fugiat provident a nesciunt nam esse impedit quod dolorum, quia sequi! Inventore numquam perspiciatis, veniam ea aut facere magnam eum eveniet! Aut, voluptatem esse!"
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            /*$post = [];
            foreach ($posts as $p) {
               if ($p["slug"] === $slug) {
                   $post = $p;
               }
            }
            tdk dibutuhkan lagi*/

            return $posts->firstWhere('slug', $slug);
        }
    }

