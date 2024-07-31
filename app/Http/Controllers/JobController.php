<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //Index
    public function index()
    {
       $jobs = Job::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index',[
        'jobs' => $jobs
        ]);
    }

    //Create
    public function create()
    {
        return view('jobs.create');
    }

    //Show
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    //Store
    public function store()
    {
        request()->validate([
        'title'=>['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
    }

    //Edit
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    //Update
    public function update(Job $job)
    {
    
    //---valdiate
    request()->validate([
        'title'=>['required', 'min:3'],
        'salary' => ['required']
    ]);

    //---update the job
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    //---and persist
    //---redirect to the job page
    return redirect('/jobs/' . $job->id);

    }

    public function destroy(Job $job)
    {
    //authorize (On Hold ...)

    //delete the job
    //Job::findOrFail($id)->delete();
    $job->delete();

    //redirect
    return redirect('/jobs');
    }
}