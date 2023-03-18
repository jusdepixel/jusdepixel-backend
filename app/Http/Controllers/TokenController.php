<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function __invoke(Request $request): string
    {
        return csrf_token();
    }
}
