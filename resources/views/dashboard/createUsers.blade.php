@extends('dashboard.layouts.master')

@section('content')

<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            <h4 class="title">Novo Usuário</h4>
        </div>
        <div class="content">
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="user" class="form-control" placeholder="Nome de Usuario">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email">
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
                            <label>Senha</label>
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

                <button type="submit" class="btn btn-info btn-fill pull-right">Salvar</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
    
@endsection