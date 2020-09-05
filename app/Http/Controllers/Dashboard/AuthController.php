<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if(Auth::check() === false) {
            return view('dashboard.login');
        } else {
            return redirect()->route('dashboard.index');
        }
    }

    public function login(UserLoginRequest $request)
    {
        $validated = $request->validated();

        $credentials = [
            'user' => $validated['user'],
            'password' => $validated['password']
        ]; 

        if(Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index');
        }

        return redirect()->back()->withInput()->withErrors([
            'auth' => 'Os dados não conferem.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}