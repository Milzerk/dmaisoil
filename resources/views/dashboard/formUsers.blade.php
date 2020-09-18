@extends('dashboard.layouts.master')
@section('nav.user')
    active
@endsection
@section('nav.title')
    Usuários
@endsection

@section('content')

<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            @if (isset($user))
                <h4 class="title">Editar Usuário</h4>  
            @else
                <h4 class="title">Novo Usuário</h4>            
            @endif
        </div>
        <div class="content">
            <form action="{{ isset($user) ? route('user.update',  ['user' => $user->id]) : route('user.store') }}" method="POST">
                @csrf
                @isset($user)
                    @method("put")
                @endisset
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Id</label>
                            <input type="number" value="{{ isset($user) ? $user->id : "" }}"  class="form-control " disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="user" value="{{ old('user', (isset($user) ? $user->user : "")) }}"  class="form-control " placeholder="Nome de Usuario" @if (isset($user)) disabled @else required @endif>
                            @error('user') <p class="small text-danger">{{$errors->first('user')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email', (isset($user) ? $user->email : "")) }}" class="form-control" placeholder="Email" required>
                            @error('email') <p class="small text-danger">{{$errors->first('email')}}</p> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" value="{{ old('name', (isset($user) ? $user->name : "")) }}" class="form-control" placeholder="Nome" required>
                            @error('name') <p class="small text-danger">{{$errors->first('name')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            @if (isset($user))
                                <label>Nova Senha</label> 
                            @else
                                <label>Senha</label>            
                            @endif                           
                            <input type="password" name="password" class="form-control" placeholder="Senha" @empty($user) required @endempty>
                            @error('password') <p class="small text-danger">{{$errors->first('password')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Repetir Senha</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Repetir Senha" @empty($user) required @endempty>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">Salvar</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
    
@endsection