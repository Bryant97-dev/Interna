<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login (Request $request){
        $user = User::where('email', $request->email)->first();
        if(! $user->tokens() == null){
            $user->tokens()->delete();
        }
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response([
                'status' => 404,
                'message' => "Not Found!!!"
            ]);
        }
        return response([
            'access_token'=>$user->createToken('token')->plainTextToken,
            'status'=>'200',
            'message'=>'Success'
        ]);
    }

    public function logout (Request $request){
        auth()->logout();
        return response()->json([
            'message'    => "Success"
        ], 200);

//        $user = User::where('email', $request->email)->first();
//        Auth::guard('web')->logout();
//        $user->tokens()->delete();
//        return response()->json([
//            'success'    => true
//        ], 200);
    }
}
