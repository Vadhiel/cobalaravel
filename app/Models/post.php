<?php

namespace App\Models;



class post 
{
    private static $blog_posts =    [
        "title" => "judul post pertama",
        "slug" => "judul-post-pertama",
        "author" => "mapudiltok",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius culpa enim cum recusandae voluptatum in quidem architecto, omnis a.
        A, illum! Voluptatem molestiae perferendis rem sit voluptate, aliquam ea? Aperiam saepe veniam quo nobis repellendus, fugiat reiciendis 
        iste illum quos id temporibus atque delectus voluptate tempore quisquam at amet magnam recusandae laboriosam soluta consequuntur suscipit.
        Quidem eligendi rem suscipit ex veritatis aliquid? Ullam earum magni tenetur natus quia accusamus vitae tempora, exercitationem nostrum non
        eveniet similique rem ipsum impedit ad."
    ],
    [
        "title" => "judul post kedua",
        "slug" => "judul-posts-kedua",
        "author" => "abrar",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quibusdam magni excepturi tempore quia est earum doloribus quae
        sunt illum consectetur quisquam quis nisi impedit, sequi quo vitae non et error iste soluta perspiciatis quidem rem. Nulla repellendus alias
        omnis illum eos iure cupiditate modi et reprehenderit voluptatem obcaecati aperiam aliquam, doloribus a suscipit accusamus perspiciatis nostrum
        perferendis consequatur harum repellat sapiente? Voluptatum temporibus esse repellat nulla. Praesentium veritatis harum adipisci distinctio 
        error odit quidem! Officia totam repudiandae quasi aliquam, eum ab quos minus ipsum molestiae saepe facilis nulla tenetur quisquam quae quam
        itaque similique. At quos doloremque omnis dignissimos!"
    ];
}

public static function all()
{
    return self::$blog_posts;

}


public static function find($slug)
{
    $posts = self::$blog_posts;
    $post = [];
    foreach($posts as $p) {
        if($p["slug"] === $slug) {
            $post = $p;
    }
}

}