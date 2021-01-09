<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user (){
        $users = Auth::user()->where('id', '=', Auth::id())->get();
        return response()->json($users);
    }
}
