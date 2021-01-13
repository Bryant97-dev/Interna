<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user (){
        $users = User::with('study_programs')->with('periods')->where('id', '=', Auth::id())->get();
        return response($users);
//        $users = Auth::user();
//        if (empty($users->profile_photo_path))
//        {
//            $users->profile_photo_path = $users->profile_photo_url;
//        }
//        return response([
//            'id'                    => $users->id,
//            'study_program'         => $users->study_programs->abbreviation,
//            'period'                => $users->periods->period,
//            'name'                  => $users->name,
//            'email'                 => $users->email,
//            'nim'                   => $users->nim,
//            'gender'                => $users->gender,
//            'line_account'          => $users->line_account,
//            'phone'                 => $users->phone,
//            'batch'                 => $users->batch,
//            'description'           => $users->description,
//            'profile_photo_path'    => $users->profile_photo_path,
//        ]);
    }
}
