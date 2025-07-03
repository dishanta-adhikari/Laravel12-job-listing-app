<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index()
    {
        $featuredJobs = Job::with(['employer', 'tags'])
            ->where('featured', 1)
            ->latest()
            ->get();

        $normalJobs = Job::with(['employer', 'tags'])
            ->where('featured', 0)
            ->latest()
            ->get();

        return view('Jobs.index', [
            'featuredJobs' => $featuredJobs,
            'jobs' => $normalJobs,
            'tags' => Tag::all(),
        ]);
    }




    public function create()
    {
        return view('Jobs.create');
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in('Part Time', 'Full Time')],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $attributes['featured'] = $request->has('featured');

        $employer = Auth::user()->employer;

        if (!$employer) {
            return back()->with('error', 'No employer account linked to this user.');
        }

        $job = $employer->jobs()->create(Arr::except($attributes, 'tags'));

        if (!empty($attributes['tags'])) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag(trim($tag));
            }
        }

        return redirect()->route('index')->with('success', 'Job created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
