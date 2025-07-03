<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::with(['employer', 'tags'])
            ->where('title', 'LIKE', '%' . request('query') . '%')
            ->get();


        return view('jobs.results', ['jobs' => $jobs]);
    }
}
