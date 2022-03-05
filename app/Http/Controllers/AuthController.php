<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;



class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('R_Token')->plainTextToken;

        $response = [
            'User:' => $user,
            'Token:' => $token,
        ];

        return response()->json($response);
    }




    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['info' => 'Pogresan email ili password!']);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('L_Token')->plainTextToken;

        $response = [
            'User:' => $user,
            'Token:' => $token,
        ];

        return response()->json($response);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Korisnik izlogovan uspešno');
    }
}