@extends('dashboard.layouts.master')
@section('nav.user')
    active
@endsection
@section('nav.title')
    Usuários
@endsection

@section('content')

@if (session('success'))
<div class="col-md-8 col-md-offset-2">
    <div class="alert alert-success ">
        <span><b>{{ session('success') }}</b></span>
    </div>  
</div>
@endif

<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            <h4 class="title pull-left">Usuários</h4>
            <a href="{{ route('user.create') }}" class="btn btn-info btn-fill pull-right">Novo Usuário</a>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->user}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
