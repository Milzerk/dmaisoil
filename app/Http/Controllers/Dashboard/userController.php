<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('dashboard.users', [
            'users' => $users
        ]);
        
    }

    public function showRegisterForm()
    {
        return view('dashboard.createUsers');
    }

    public function register(UserRegisterRequest $request) {
        $validated = $request->validated();
        
    
        $user = new User();
        $user->user = $validated['user'];
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save(); 
        return redirect()->route('dashboard.users', ['success'])->with('success', 'O usuário foi criado com sucesso!');
        ;
    }

    public function account()
    {
        $user = auth()->user();
        return view('dashboard.account', [
            'user' => $user
        ]);
    }
}
