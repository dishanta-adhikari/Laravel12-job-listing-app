<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $jobs = $tag->jobs()->with(['employer', 'tags'])->get();
        return view('jobs.results', ['jobs' => $jobs]);
    }
}
