<?php

declare(strict_types=1);

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(): array
    {
        return [
            'name' => config('app.name'),
            'version' => config('app.version'),
            'author' => config('app.author'),
            'repository' => config('app.repository'),
            'url' => config('app.url'),
            'frontend_url' => config('app.frontend_url'),
            'locale' => config('app.locale'),
        ];
    }
}
