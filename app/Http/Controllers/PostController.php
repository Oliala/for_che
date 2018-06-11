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
//    public function getDashboard()
//    {
//        $posts=Post::all();
//
//        return view('place.place_index',['posts'=>$posts]);
//    }
    public function postCreatePost(Request $request)
    {
        $post= new Post();
        $post->title = $request['title'];
        $post->body = $request['body'];
        $message='there was an error';
       if($request->user()->posts()->save($post)){
        $message='post succesfully created';
        }
        return redirect()->route('place_index')->with(['message'=>$message, 'place'=>$place]);
    }
    public function getDeletePost($post_id)
    {
        $post=Post::where('id',$post_id)->first();
        $post->delete();
        return redirect()->route('place.place_index')->with(['message'=>'Succesfully delete']);
    }

}