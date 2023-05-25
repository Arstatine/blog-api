<?php

namespace App\Http\Controllers;

use App\Models\Likes;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    // create new like
    public function store(Request $request){
        $form = $request->validate([
            'post_id' => ['required'],
            'user_id' => ['required'],
        ]);

        if($form){
            $like = Likes::create($form);
            return response()->json(['message' => 'Like a post.', 'post' => $like]);
        }

        return response()->json(['message' => 'Unable to like.']);
    }

    // update a like
    public function destroy($id){
        $like = Likes::destroy($id);

        if($like){
                return response()->json(['message' => 'Unlike a post.']);
        }

        return response()->json(['message' => 'Unable to unlike a post.']);
    }
}
