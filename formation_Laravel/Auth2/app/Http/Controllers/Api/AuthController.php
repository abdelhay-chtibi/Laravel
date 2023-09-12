<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields=$request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:8|confirmed'
        ]);
        
        
        $user=User::create([
        'name'=>$fields['name'],
        'email'=>$fields['email'],
        'password'=>bcrypt($fields['password'])
        ]);
        
        
        return response([
        'user'=>$user,
        'token'=>$user->createToken("prj3_all_token")->plainTextToken
        ], 201);
        }
        public function login(Request $request){
            $fields=$request->validate([
                    'email'=>'required|string',
                    'password'=>'required|string|min:8'
                ]
            );
    
            $user=User::where('email', $fields['email'])->first();
            if(!$user || !Hash::check($fields['password'], $user->password)){
                return response(['message'=>'bad cred'], 401);
            }
            return response([
                    'message' => 'User Logged In Successfully',
                    'token' => $user->createToken("prj3_all_token")->plainTextToken
                ], 200);
        }
    
        public function logout(Request $req){
            auth()->user()->tokens()->delete();
            return ['message'=>'User logged out successfully.'];
        }
}
