<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

//ini kalo kehubung sm database

//class Post utk simpen data2 postingannya biar ga di masukin di route web
class Post {

    private static $blog_posts = [
        [
            "blog_title" => "10000 Hours",
            "slug" => "10000-hours",
            "author" => "Jeon Jungkook",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Sapiente explicabo dignissimos deleniti, et eum consectetur dolores soluta odit porro fugit excepturi sequi dicta magni aspernatur id consequuntur sunt quis ab. 
            Reprehenderit cum, labore officiis cupiditate aliquam quos totam ea commodi quia molestias fuga culpa, voluptatum enim excepturi illo autem ab odit perferendis eum dicta, ad voluptates. 
            Consectetur quasi aliquam voluptas voluptatem nulla optio. 
            Omnis qui tenetur eum esse placeat cum eius reprehenderit non inventore voluptatibus expedita, 
            delectus maiores quae enim."
        ],
        [
            "blog_title" => "Christmast Tree",
            "slug" => "christmast-tree",
            "author" => "Kim Taehyung",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Sapiente explicabo dignissimos deleniti, et eum consectetur dolores soluta odit porro fugit excepturi sequi dicta magni aspernatur id consequuntur sunt quis ab. 
            Reprehenderit cum, labore officiis cupiditate aliquam quos totam ea commodi quia molestias fuga culpa, voluptatum enim excepturi illo autem ab odit perferendis eum dicta, ad voluptates. 
            Consectetur quasi aliquam voluptas voluptatem nulla optio. 
            Omnis qui tenetur eum esse placeat cum eius reprehenderit non inventore voluptatibus expedita, 
            delectus maiores quae enim."
        ],
        [
            "blog_title" => "Black Swan",
            "slug" => "black-swan",
            // slug itu judul tp huruf kecil semua, spasinya diganti dash
            "author" => "Park Jimin",
            "body" => "Lorem ipsum dolor sit amet consectetur  adipisicing elit. 
            Sapiente explicabo dignissimos deleniti, et eum consectetur dolores soluta odit porro fugit excepturi sequi dicta magni aspernatur id consequuntur sunt quis ab. 
            Reprehenderit cum, labore officiis cupiditate aliquam quos totam ea commodi quia molestias fuga culpa, voluptatum enim excepturi illo autem ab odit perferendis eum dicta, ad voluptates. 
            Consectetur quasi aliquam voluptas voluptatem nulla optio. 
            Omnis qui tenetur eum esse placeat cum eius reprehenderit non inventore voluptatibus expedita, 
            delectus maiores quae enim."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts); //pake self karena properti static
        // $this->blog_post; //ini kalo properti biasa
        //dibungkus pake collect biar punya banyak fungsi arraynya
    }

    public static function find($slug){
        // $blog_posts = self::$blog_posts;
        //ini kalo arraynya biasa ga dibungkus collect, pake self krn ambil properti static
        // $new_post = [];

        // foreach($blog_posts as $post){
        //     if ($post["slug"] === $slug){
        //         $new_post = $post;
        //         break;
        //     }
        // }
        // return $new_post;
        
        //tp kita mau pake function static all() biar arraynya udh kebungkus sm collect
        //krn dia function static, ga self lg tp sttaic
        $blog_posts = static::all();

        return $blog_posts->firstWhere('slug', $slug);


    }

}
