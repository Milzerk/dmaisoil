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
            <h4 class="title">Novo Cliente</h4>
        </div>
        <div class="content">
            <form action="{{ isset($client) ? route('updateClient.do',  ['client' => $client->id]) : route('registerClient.do') }}" method="POST">
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
    <div class="card">
        <div class="row header">
            <div class="col-md-3">
                <h4 class="title pull-left margin-pull-left">Novo veículo</h4>
                <button type="button" class="btn btn-info btn-fill btn-sm btn-toggle pe-7s-plus" data-element="#toggle"></button>
            </div>
        </div>
        <div id="toggle">


            <div class="content">
                <form action="{{ isset($client) ? route('updateClient.do',  ['client' => $client->id]) : route('registerClient.do') }}" method="POST">
                    @isset($client)
                        @method("put")
                    @endisset
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Placa</label>
                                <input type="text" value="QKL 7086"  class="form-control">
                                @error('name') <p class="small text-danger">{{$errors->first('name')}}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Marca</label>
                                <input type="text" name="name" value="volkswagen"  class="form-control " placeholder="Nome" >
                                @error('name') <p class="small text-danger">{{$errors->first('name')}}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" name="phone" value="Hyundai HB20"  class="form-control " placeholder="Telefone" >
                                @error('phone') <p class="small text-danger">{{$errors->first('phone')}}</p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <button type="submit" class="btn btn-info btn-fill pull-right" disabled>Salvar</button>
                    </div>
                </form>              
            </div>    
            <hr>  
        </div>
        <div class="header">
            <h4 class="title pull-left">veículos</h4>
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
                        <td>QKL 7086r</td>
                        <td>volkswagen</td>
                        <td>Hyundai HB20</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
        $(document).ready(function(){
            $("#toggle").toggle();
            $(".btn-toggle").click(function(e){
                e.preventDefault();
                el = $(this).data('element');
                $(el).toggle();
            });
        });
</script>
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

