<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    // create new comment
    public function store(Request $request){
        $form = $request->validate([
            'post_id' => ['required'],
            'user_id' => ['required'],
            'comment' => ['required'],
        ]);

        if($form){
            $post = Comments::create([
                'post_id' => $request->post_id,
                'user_id' => $request->user_id,
                'comment' => $request->comment
            ]);
            return response()->json(['message' => 'Commented on a post.', 'comment' => $post]);
        }

        return response()->json(['message' => 'Unable to comment.']);
    }

    // update a comment
    public function update(Request $request, $id){
        $comment = Comments::find($id);

        if($comment){
            $form = $request->validate([
                'comment' => ['required'],
            ]);

            if($form){
                $comment->comment = $request->comment;
                $comment->save();
                return response()->json(['message' => 'Updated a comment.', 'comment' => $comment]);
            }

        }

        return response()->json(['message' => 'Unable to comment.']);
    }

    // delete a comment
    public function destroy($id){
        $comment = Comments::destroy($id);

        if($comment){
                return response()->json(['message' => 'Comment deleted successfully with the id of '. $id]);
        }

        return response()->json(['message' => 'Unable to delete this comment.']);
    }
}
