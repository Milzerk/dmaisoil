<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRegisterRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('dashboard.clients', [
           'clients' => $clients
       ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.formClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRegisterRequest $request)
    {
        $validated = $request->validated();
        
    
        $client = new Client();
        $client->name = $validated['name'];
        $client->email = $validated['email'];
        $client->phone = $validated['phone'];
        $client->save(); 
        
        $client->get();

        //return redirect()->back()->with('success', 'Cadastrado com sucesso!');

        return redirect()->route('client.show', ['client' => $client])->with('success', 'O cliente foi cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('dashboard.showClient', [
            'client' => $client
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view ('dashboard.formClient', [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRegisterRequest $request, Client $client)
    {
        $validated = $request->validated();
        
        $client->name = $validated['name'];
        $client->email = $validated['email'];
        $client->phone = $validated['phone'];
        $client->save(); 

        return redirect()->route('client.show', ['client' => $client])->with('success', 'O cliente foi alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
