<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobCollection;
use App\Models\Job;
use Illuminate\Support\Facades\Cache;

class JobController extends Controller
{
    public function index(): JobCollection
    {
        if (!Cache::has('jobs')) {
            Cache::add('jobs', new JobCollection(
                Job::all()
            ));
        }

        return Cache::get('jobs');
    }
}
