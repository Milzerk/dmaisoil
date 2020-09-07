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
            <h4 class="title">Novo Usuário</h4>
        </div>
        <div class="content">
            <form action="{{ route('registerUser.do') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="user" value="{{ old('user') }}"  class="form-control " placeholder="Nome de Usuario" required>
                            @error('user') <p class="small text-danger">{{$errors->first('user')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
                            @error('email') <p class="small text-danger">{{$errors->first('email')}}</p> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nome" required>
                            @error('name') <p class="small text-danger">{{$errors->first('name')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="password" class="form-control" placeholder="Senha" required>
                            @error('password') <p class="small text-danger">{{$errors->first('password')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Repetir Senha</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Repetir Senha" required>
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