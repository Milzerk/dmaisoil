@extends('dashboard.layouts.master')
@section('nav.user')
    active
@endsection

@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">Editar Perfil</h4>
        </div>
        <div class="content">
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="user" class="form-control" placeholder="Nome de Usuario" disabled>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nova Senha</label>
                            <input type="text" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Repetir Senha</label>
                            <input type="text" class="form-control" placeholder="Repetir Senha">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">Atualizar Perfil</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-user">
        <div class="image">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
        </div>
        <div class="content">
            <div class="author">
                    <a href="#">
                <img class="avatar border-gray" src="{{ asset('dash/assets/img/faces/face-0.jpg') }}" alt="...">

                    <h4 class="title">Mike Andrew<br>
                        <small>michael24@mail.com</small>
                    </h4>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection