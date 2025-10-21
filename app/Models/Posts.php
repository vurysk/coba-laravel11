<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Posts
{
    public static  function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Nabila Firda',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Nabila Firda',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate minima, facilis sunt quidem aut libero nam itaque nesciunt magni error praesentium optio illum perferendis autem quaerat harum ipsam numquam reprehenderit.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post){
            abort(404);
        }

        return $post;

        //     return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });
    }
}
