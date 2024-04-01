<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index(){
        echo '<h2>Query Eloquent Model</h2>';

        // $allPosts = Post::all();

        // if ($allPosts->count()>0) {
        //     foreach ($allPosts as $item) {
        //         echo $item->title.'<br/>';
        //     }
        // }

        // $detail = Post::find(1);

        // $activePosts = DB::table('posts')->where('status', 1)->get();

        // $activePosts = Post::where('status', 1)->orderBy('id', 'DESC')->get();

        // if ($activePosts->count()>0) {
        //     foreach ($activePosts as $item) {
        //         echo $item->title.'<br/>';
        //     }
        // }

        // $allPosts = Post::all();
        // $activePosts = $allPosts->reject(function ($post){
        //     return $post->status==0;
        // });

        // Post::chunk(2, function($posts) {
        //     foreach ($posts as $post) {
        //         echo $post->title."<br />";
        //     }
        //     echo 'Kết thúc chunk <br />';
        // });

        $allPosts = Post::cursor();
        foreach ($allPosts as $item) {
            echo $item->title."<br />";
        }
    }
}
