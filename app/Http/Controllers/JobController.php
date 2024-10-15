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
}
