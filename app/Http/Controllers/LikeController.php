<?php
/**
 * Created by PhpStorm.
 * User: Olha
 * Date: 14.06.2018
 * Time: 7:47
 */

namespace App\Http\Controllers;

use App\Post;
use App\Place;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class LikeController extends Controller
{
    public function saveLike(Request $request)
    {
        if (! empty(Auth::user())) {
            $user_id = Auth::user()->id;
            $post_id = $request->input('post');
            //$success = true;
            if (empty(Like::where('user_id', $user_id)->where('post_id', $post_id)->where('like', 1)->first())) {
                $delDislike = Like::where('user_id', $user_id)->where('post_id', $post_id)->where('like', 0)->first();
                if (! empty($delDislike)) {
                    $delDislike->delete();
                }
                $like = new Like;
                $like->user_id = $user_id;
                $like->post_id = $post_id;
                $like->like = 1;
                $like->save();
                return response()->json(['post_id' => $post_id]);
            }

        }
        return response()->json(['fail' => 'Fail']);
    }

    public function saveDislike(Request $request)
    {
        if (! empty(Auth::user())) {
            $user_id = Auth::user()->id;
            $post_id = $request->input('post');
            //$success = true;
            if (empty(Like::where('user_id', $user_id)->where('post_id', $post_id)->where('like', 0)->first())) {
                $delLike = Like::where('user_id', $user_id)->where('post_id', $post_id)->where('like', 1)->first();
                if (! empty($delLike)) {
                    $delLike->delete();
                }
                $like = new Like;
                $like->user_id = $user_id;
                $like->post_id = $post_id;
                $like->like = 0;
                $like->save();
                return response()->json(['post_id' => $post_id]);
            }

        }
        return response()->json(['fail' => 'Fail']);
    }
}