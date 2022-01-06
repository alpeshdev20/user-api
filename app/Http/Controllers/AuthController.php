<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'middlename' => 'required|string',
            'surname' => 'required|string',
            'address_line1' => 'required|string',
            'address_line2' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'zipcode' => 'required|string',
            'phone' => 'required|string',
            'birth_date' => 'required|string',
            'gender' => 'required|string',
            'hobby' => 'required|string',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'middlename' => $fields['middlename'],
            'surname' => $fields['surname'],
            'address_line1' => $fields['address_line1'],
            'address_line2' => $fields['address_line2'],
            'country' => $fields['country'],
            'state' => $fields['state'],
            'city' => $fields['city'],
            'zipcode' => $fields['zipcode'],
            'phone' => $fields['phone'],
            'birth_date' => $fields['birth_date'],
            'gender' => $fields['gender'],
            'hobby' => $fields['hobby'],
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
