<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user (){
        $users = User::with('study_programs')->with('periods')->where('id', '=', Auth::id())->get();
        return UserResource::collection($users);
    }
}
