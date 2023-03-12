<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index(): Collection
    {
         return User::all();
    }

    public function edit(User $user): User
    {
        return User::query()->find($user)->first();
    }

    public function update(Request $request, User $user): Response
    {
        $user->update([
            'name' =>  $request->get('name'),
            'email' =>  $request->get('email'),
        ]);

        return response([
            'message' => 'Error detected',
            'errors' => [
                'email' => ['Bad email'],
                'name' => ['Bad name']
            ],
        ], 422);
    }
}
