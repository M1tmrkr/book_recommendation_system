<?php

namespace App\Models\Eloquent;

use App\Models\Blog;
use App\Models\File;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DM_Post extends Model
{
    use HasFactory;

    // get the single post of particular language
    public static function getSinglePost($post_unique_id) {
        // $post = Post::where('deleted_at', '=', null)->where('type', '=', 'post')->where('post_unique_id', '=', $post_unique_id)->where('lang_id', '=', $lang_id)->first();
        $post = Product::where('deleted_at', '=', null)
        ->where('post_unique_id', '=', $post_unique_id)
        ->first();
        if(isset($post)){
            $post->increment('visit_no');
        }
        return $post;

    }

     // get the file
     public static function getFile($post_unique_id) {
        return File::where('post_unique_id', '=', $post_unique_id)->get();
    }

     // get the single post of particular language
     public static function getSingleBlog($post_unique_id) {
        // $post = Post::where('deleted_at', '=', null)->where('type', '=', 'post')->where('post_unique_id', '=', $post_unique_id)->where('lang_id', '=', $lang_id)->first();
        $post = Blog::where('deleted_at', '=', null)
        ->where('post_unique_id', '=', $post_unique_id)
        ->first();
        if(isset($post)){
            $post->increment('visit_no');
        }
        return $post;

    }
}
