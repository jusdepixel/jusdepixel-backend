<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobCollection;
use App\Models\Job;

class JobController extends Controller
{
    public function index(): JobCollection
    {
        return new JobCollection(
            Job::all()
        );
    }
}
