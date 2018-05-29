<?php
/**
 * Created by PhpStorm.
 * User: Olha
 * Date: 20.05.2018
 * Time: 17:48
 */

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function postCreatePost(Request $request)
    {

        $post= new Post();
        $post->title = $request['title'];
        $post->body = $request['body'];
        $request->user()->posts()->save($post);
        return redirect()->route('place_index');
    }
}