<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserIndexController extends Controller
{
    public function create(UserRequest $request)
    {
        return User::create($request->validated());

       // return view("wel");
    }
}
