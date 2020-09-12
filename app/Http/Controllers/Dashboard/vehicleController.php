<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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

    public function showRegisterForm()
    {
        return view ('dashboard.createVehicle');
    }
}
