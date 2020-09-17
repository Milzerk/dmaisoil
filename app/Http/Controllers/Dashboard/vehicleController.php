<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleRegisterRequest;
use App\Vehicle;
use Illuminate\Http\Request;

class vehicleController extends Controller
{
    public function vehicles()
    {
        $vehicles = Vehicle::all();

        return view('dashboard.vehicles', [
            'vehicles' => $vehicles,
        ]);
    }

    public function register(VehicleRegisterRequest $request, Client $client)
    {
        $validated = $request->validated();

        $vehicle = new Vehicle();
        $vehicle->client = $client->id;
        $vehicle->license = $validated['license'];
        $vehicle->brand = $validated['brand'];
        $vehicle->model = $validated['model'];
        $vehicle->save(); 

        return redirect()->back()->with('success', 'Veículo adcionado com sucesso!');
    }

    public function showRegisterForm()
    {
        return view ('dashboard.createVehicle');
    }
}
