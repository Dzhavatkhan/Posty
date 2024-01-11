<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            "posts" => $posts
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function like($id)
    {
        $post = Post::query()->where("id", $id)->first();
        $like = $post->like;
        $like = $like +1;
        $like = $post->update(["like" => $like]);
        if ($like) {
            return response()->json([
                "like" => "allright"
            ], 200);
        }
        else{
            return response()->json([
                "like" => "problems"
            ], 500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
