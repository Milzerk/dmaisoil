@extends('dashboard.layouts.master')
@section('nav.title')
    Veículos    
@endsection
@section('nav.vehicle')
    active
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Proprietário do veículo</h4>
            </div>
            <div class="content">
                <div class="row">
                    <div class="typo-line col-md-4">
                        <h5><p class="category">Nome</p>Miller Kisley Barbosa da Silva</h4>
                    </div>
                    <div class="typo-line col-md-4">
                        <h5><p class="category">Email</p>devmiller.kisley@gmail.com</h4>
                    </div>
                    <div class="typo-line col-md-4">
                        <h5><p class="category">Telefone</p>+55 (63) 99102-4493</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h4 class="title">veículos</h4>
            </div>
            <div class="content">
                <div class="row"> 
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Placa</label>
                            <input type="email" name="email" value="{{ old('email', (isset($client) ? $client->email : "")) }}" class="form-control" placeholder="Email" >
                            @error('email') <p class="small text-danger">{{$errors->first('email')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Marca</label>
                            <input type="text" name="phone" value="{{ old('phone', (isset($client) ? $client->phone : "")) }}"  class="form-control " placeholder="Telefone" >
                            @error('phone') <p class="small text-danger">{{$errors->first('phone')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Modelo</label>
                            <input type="text" name="phone" value="{{ old('phone', (isset($client) ? $client->phone : "")) }}"  class="form-control " placeholder="Telefone" >
                            @error('phone') <p class="small text-danger">{{$errors->first('phone')}}</p> @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-fill pull-right">Salvar</button>
            </div>  
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>QKL-7086</td>
                            <td>Fiat</td>
                            <td>Cronos</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection