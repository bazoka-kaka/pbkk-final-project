<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    // Show all jobs
    public function index() {
        return view('jobs.index', [
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //Show single job
    public function show(Job $job) {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    // Show Create Form
    public function create() {
        return view('jobs.create');
    }

    // Store Job Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'email' => ['required', 'email'],
            'duration' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $id = auth()->id();

        $formFields['user_id'] = $id;

        Job::create($formFields);

        return redirect('/')->with('message', 'Job created successfully!');
    }
}
