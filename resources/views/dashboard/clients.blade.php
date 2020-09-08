@extends('dashboard.layouts.master')
@section('nav.client')
    active
@endsection

@section('nav.title')
    Clientes
@endsection

@section('content')

<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            <h4 class="title pull-left">Clientes</h4>
            <a href="{{ route('registerClient') }}" class="btn btn-info btn-fill pull-right">Novo Cliente</a>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->phone}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection