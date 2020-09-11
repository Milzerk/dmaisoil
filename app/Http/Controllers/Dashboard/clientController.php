<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class clientController extends Controller
{
    public function clients()
    {
        $clients = Client::all();
         return view('dashboard.clients', [
            'clients' => $clients
        ]); 
    }

    public function showRegisterForm()
    {
        return view ('dashboard.createClient');
    }

    public function register(ClientRegisterRequest $request)
    {
        $validated = $request->validated();
        
    
        $client = new Client();
        $client->name = $validated['name'];
        $client->email = $validated['email'];
        $client->phone = $validated['phone'];
        $client->save(); 
        
        return redirect()->back()->with('success', 'Cadastrado com sucesso!');

        //return redirect()->route('dashboard.clients', ['success'])->with('success', 'O cliente foi cadastrado com sucesso!');
    }

    public function showClient(Client $client) {
        return view('dashboard.createClient', [
           'client' => $client
       ]); 
    }

    public function update(ClientRegisterRequest $request, Client $client)
    {
        $validated = $request->validated();
        
        $client->name = $validated['name'];
        $client->email = $validated['email'];
        $client->phone = $validated['phone'];
        $client->save(); 

        return redirect()->back()->with('success', 'Alterado com sucesso!');
    }
}
