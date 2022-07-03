<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class post // extends Model
{
    // use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Vps terbaik",
            "slug" =>"vps-terbaik",
            "author" => "Fahmi",
            "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus provident perferendis consequuntur sunt repudiandae accusantium ut numquam amet voluptates hic, quidem commodi officia doloremque at nemo maxime, assumenda placeat aut."
    
        ],
        [
            "title" => "Hosting terbaik",
            "slug" => "hosting-terbaik",
            "author" => "Fahmi",
            "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam, soluta ducimus iure optio atque aut modi, ab amet eius laborum culpa vero similique sequi at earum consequuntur. Vero pariatur magnam similique est optio cupiditate. Accusamus corrupti inventore officiis libero. Natus amet ipsam eius! Rem provident soluta eius distinctio autem tempora enim, a voluptas dolorem similique inventore recusandae eaque odit repudiandae. Optio quibusdam earum asperiores dolorem voluptas corporis cumque quas distinctio autem adipisci pariatur amet vero quasi ratione, dolores quo vel! Sapiente quam accusantium voluptatum a consequatur aspernatur, odit alias? Voluptatem ex optio impedit maxime voluptate molestiae laudantium id aliquid dignissimos?"
        ]
    
    ];

public static function all()
     {
        //konsep collection
        return collect(self::$blog_posts);
    }

public static function find($slug)
    {
       $post= static::all(); 
    //konsep return hasil collection
    return $post->firstWhere('slug',$slug);
   }
}
