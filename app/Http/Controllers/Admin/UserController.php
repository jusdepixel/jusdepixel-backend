<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index(): UserCollection
    {
         return new UserCollection(
             User::all()
         );
    }

    public function edit(User $user): UserResource
    {
        return new UserResource($user);
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
