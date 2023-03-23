<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\MeResource;
use App\Models\Me;
use Illuminate\Support\Facades\Cache;

class MeController extends Controller
{
    public function index(): MeResource
    {
        if (!Cache::has('me')) {
            Cache::add('me', new MeResource(
                Me::query()->first()
            ));
        }

        return Cache::get('me');
    }
}
