<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Likes;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    // show all post
    public function index(){
        $posts = Posts::all();
        if($posts){
            $post = [];
            for($i = 0; $i < count($posts); $i++){
                $p = Posts::find($posts[$i]->id);
                $likes = Likes::where('post_id', $posts[$i]->id)->get();
                $comments = [];

                $post[$i] = ['post' => $p, 'likes' => $likes, 'comments' => $comments];
            }
            return response()->json($post);
        }

        return response()->json(['message' => 'No data found.']);
    }

    // show single post
    public function show($id){
        $post = Posts::find($id);

        if($post){
            $comment = Comments::where('post_id', $post->id)->get();
            $like = Likes::where('post_id', $post->id)->get();
            $likes = [];
            $comments = [];
            if($like){
                for($j = 0; $j < count( $like); $j++){
                    $user = User::find( $like[$j]->user_id);
                     $likes[$j] = [
                        'id' =>  $like[$j]->id,
                        'post_id' =>  $like[$j]->post_id,
                        'user_id' =>  $like[$j]->user_id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'created_at' =>  $like[$j]->created_at,
                        'updated_at' =>  $like[$j]->updated_at,
                    ];
                }
            }
            if($comment){
                for($i = 0; $i < count($comment); $i++){
                    $user = User::find($comment[$i]->user_id);
                    $comments[$i] = [
                        'id' => $comment[$i]->id,
                        'post_id' => $comment[$i]->post_id,
                        'user_id' => $comment[$i]->user_id,
                        'comment' => $comment[$i]->comment,
                        'name' => $user->name,
                        'email' => $user->email,
                        'created_at' => $comment[$i]->created_at,
                        'updated_at' => $comment[$i]->updated_at,
                    ];
                }
            }
            return response()->json(['post'=> $post, 'likes' => $likes, 'comments' => $comments]);
        }

        return response()->json(['message' => 'No data found.']);
    }

    // create new post
    public function store(Request $request){
        $form = $request->validate([
            'user_id' => ['required'],
            'category_id' => ['required'],
            'post_title' => ['required'],
            'post_description' => ['required'],
            'post_content' => ['required']
        ]);

        if($form){
            $post = Posts::create($form);
            return response()->json(['message' => 'Posted succesfully', 'post' => $post]);
        }

        return response()->json(['message' => 'Unable to post.']);
    }

    // update a post
    public function update(Request $request, $id){
        $post = Posts::where('id', $id)->first();

        if($post){
            $form = $request->validate([
                'category_id' => ['required'],
                'post_title' => ['required'],
                'post_description' => ['required'],
                'post_content' => ['required']
            ]);
     
            if($form){
                $post->category_id =  $request->category_id;
                $post->post_title =  $request->post_title;
                $post->post_description =  $request->post_description;
                $post->post_content =  $request->post_content;
                $post->save();

                return response()->json(['message' => 'Updated succesfully', 'post' => $post]);
            }
        }

        return response()->json(['message' => 'No data found.']);
    }

    // delete a post
    public function destroy($id){
        $post = Posts::destroy($id);

        if($post){
                return response()->json(['message' => 'Post deleted successfully with the id of '. $id]);
        }

        return response()->json(['message' => 'Unable to delete this posts.']);
    }
}
