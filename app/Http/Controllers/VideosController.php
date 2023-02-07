<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VideosController extends Controller
{
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inertia::render('Video', [
            'video' => Video::find($id),
            'comments' => Comment::all(),
            'recommendedVideos' => Video::inRandomOrder()->get()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
