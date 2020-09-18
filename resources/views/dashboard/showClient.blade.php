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
                <h4 class="title">Cliente</h4>
            </div>
            <div class="content">
                <div class="row">
                    <div class="typo-line col-md-1">
                        <h5><p class="category">Id</p>{{ isset($client) ? $client->id : "" }}</h4>
                    </div>
                    <div class="typo-line col-md-4">
                        <h5><p class="category">Nome</p>{{ isset($client) ? $client->name : "" }}</h4>
                    </div>
                    <div class="typo-line col-md-4">
                        <h5><p class="category">Email</p>{{ isset($client) ? $client->email : "" }}</h4>
                    </div>
                    <div class="typo-line col-md-3">
                        <h5><p class="category">Telefone</p>{{ isset($client) ? $client->phone : "" }}</h4>
                    </div>
                </div>
                <a type="button" href="{{ route('client.edit', ['client' => $client->id]) }}" class="btn btn-info btn-fill pull-right">Editar</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h4 class="title">veículos</h4>
            </div>
            <div class="content ">
                <form action="{{ route('vehicle.store', ['client' => $client->id]) }}" method="post">
                    @csrf
                    <div class="row"> 
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Placa</label>
                                <input type="text" name="license" class="form-control" placeholder="Placa" >
                                @error('license') <p class="small text-danger">{{$errors->first('license')}}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Marca</label>
                                <input type="text" name="brand"   class="form-control " placeholder="Marca" >
                                @error('brand') <p class="small text-danger">{{$errors->first('brand')}}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" name="model" class="form-control " placeholder="Modelo" >
                                @error('model') <p class="small text-danger">{{$errors->first('model')}}</p> @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right">Salvar</button>
                </form>
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
            </div>
        </div>
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
                type: 'success',
                timer: 4000
            });
        });
    </script>
@endif

@endsection