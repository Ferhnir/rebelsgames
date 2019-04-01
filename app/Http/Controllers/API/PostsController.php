<?php

namespace App\Http\Controllers\API;

use App\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Posts $posts)
    {

        // return response()->json(
        //     $posts->category
        // );

        return response()->json(
            $posts->all()->map(function ($post) {
                return array(
                    'slug' => '/posts/'.$post->id,
                    'category' => $post->category->name,
                    'author' => $post->author->name,
                    'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('Y-m-d'),
                    'excetra' => json_decode($post->excetra),
                    'subject' => json_decode($post->subject)
                );
            })
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
