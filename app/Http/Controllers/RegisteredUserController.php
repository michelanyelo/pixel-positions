<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        $employerAttributes = $request->validate([
            'employer' => 'required',
            'logo' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);

        $user = User::create($userAttributes);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
