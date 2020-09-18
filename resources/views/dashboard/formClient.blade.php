@extends('dashboard.layouts.master')
@section('nav.client')
    active
@endsection
@section('nav.title')
    Clientes
@endsection
@section('style')
    <style>
        .margin-pull-left {
            margin-right: 5px!important;
        }
    </style>
@endsection
@section('content')

<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            @if (isset($client))
                <h4 class="title">Editar Cliente</h4>  
            @else
                <h4 class="title">Novo Cliente</h4>            
            @endif
        </div>
        <div class="content">
            <form action="{{ isset($client) ? route('updateClient.do',  ['client' => $client->id]) : route('client.store') }}" method="POST">
                @isset($client)
                    @method("put")
                @endisset
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Id</label>
                            <input type="number" value="{{ isset($client) ? $client->id : "" }}"  class="form-control" disabled>
                            @error('name') <p class="small text-danger">{{$errors->first('name')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" value="{{ old('name', (isset($client) ? $client->name : "")) }}"  class="form-control " placeholder="Nome" >
                            @error('name') <p class="small text-danger">{{$errors->first('name')}}</p> @enderror
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email', (isset($client) ? $client->email : "")) }}" class="form-control" placeholder="Email" >
                            @error('email') <p class="small text-danger">{{$errors->first('email')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name="phone" value="{{ old('phone', (isset($client) ? $client->phone : "")) }}"  class="form-control " placeholder="Telefone" >
                            @error('phone') <p class="small text-danger">{{$errors->first('phone')}}</p> @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-fill pull-right">Salvar</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    @isset($client)
        <div class="card">

            <div class="row header">
                <div class="col-md-3">
                    <h4 class="title pull-left margin-pull-left">veículos</h4>
                    <a href="{{ route('registerVehicle') }}" class="btn btn-info btn-fill btn-sm btn-toggle pe-7s-plus"></a>
                </div>
            </div>

            <div class="content table-responsive table-full-width">
                @if(count($client->vehicles()->get()) > 0)
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
                            @foreach ($client->vehicles()->get() as $vehicle)
                                <tr>
                                    <td>{{$vehicle->id}}</td>
                                    <td>{{strtoupper($vehicle->license)}}</td>
                                    <td>{{$vehicle->brand}}</td>
                                    <td>{{$vehicle->model}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    @endisset
</div>
@endsection

@section('scripts')
@if (session('success'))
    <script type="text/javascript">
        $(document).ready(function(){
            $.notify({
                icon: 'pe-7s-like2',
                message: " {{ session('success') }}"

            },{
                type: 'info',
                timer: 4000
            });
        });


    </script>
@endif

@endsection

