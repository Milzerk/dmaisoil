@extends('dashboard.layouts.master')
@section('nav.title')
    Veículos
@endsection
@section('nav.vehicle')
    active
@endsection

@section('content')

<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            <h4 class="title pull-left">Veículos</h4>
            <a href="{{ route('registerVehicle') }}" class="btn btn-info btn-fill pull-right">Novo Veículo</a>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Dono</th>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicles as $vehicle)
                        <tr>
                            <td>{{$vehicle->id}}</td>
                            <td>{{$vehicle->client()->first()->name}}</td>
                            <td>{{strtoupper($vehicle->license)}}</td>
                            <td>{{$vehicle->brand}}</td>
                            <td>{{$vehicle->model}}</td>
                            {{-- <td><a href="{{ route('showClient', ['client' => $client->id]) }}" class="btn btn-sm btn-warning pe-7s-pen btn-fill pull-right"></a></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection