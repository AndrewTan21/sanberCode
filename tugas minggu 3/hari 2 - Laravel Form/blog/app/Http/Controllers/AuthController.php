<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register() {
        return view('register');
    }

    public function welcome(Request $request) {
        $first_name = $request->input('firstname');
        $last_name = $request->input('lastname');

        $data = [
            'firstname' => $first_name,
            'lastname' => $last_name
        ];

        return view('welcome', $data);
        // ->with('firstname', $first_name)
        // ->with('lastname', $last_name);
    }
}
