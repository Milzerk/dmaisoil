<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        return redirect()->route('dashboard.index');
    }
}
