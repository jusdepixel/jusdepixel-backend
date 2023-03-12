<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Support\Collection;

class IndexController extends Controller
{
    public function __invoke(): Collection
    {
        return Domain::all();
    }
}
