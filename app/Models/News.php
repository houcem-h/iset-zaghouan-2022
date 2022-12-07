<?php

namespace App\Models;

class News
{
    public static $news = [
        [
            "id" => 1,
            "title" => "First News",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ],
        [
            "id" => 2,
            "title" => "Second News",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ],
        [
            "id" => 3,
            "title" => "Third News",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ],
        [
            "id" => 4,
            "title" => "Fourth News",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ],
    ];

    public static function all()
    {
        return collect(self::$news);
    }

    public static function find($id)
    {
        $news = static::all();
        return $news->firstWhere('id', $id);
    }
}
