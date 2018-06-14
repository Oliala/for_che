<?php
/**
 * Created by PhpStorm.
 * User: Olha
 * Date: 20.05.2018
 * Time: 17:48
 */

namespace App\Http\Controllers;
use App\Post;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $place=new Place();
        $this->validate($request,[
            'title'=>'required|max:100',
            'body'=>'required|max:500'
        ]);
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->place_id = $request['place_id'];
        $post->user_id = Auth::id();
        //$place->id=$request['place_id'];
        $message='there was an error';
        if($post->save()){
            $message='post succesfully created';
        }
        return redirect()->route('place_index', $post->place_id)->with(['message'=>$message,$place->id]);
    }
    public function getDeletePost($post_id)
    {
        $post=Post::where('id',$post_id)->first();
        $post->delete();
//        return redirect()->route('place.place_index')->with(['message'=>'Succesfully delete']);
        return back()->with(['message'=>'Succesfully delete']);

    }

}