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
            @if (isset($client))
                <h4 class="title">Editar Cliente</h4>  
            @else
                <h4 class="title">Novo Cliente</h4>            
            @endif
        </div>
        <div class="content">
            <form action="{{ isset($client) ? route('client.update',  ['client' => $client->id]) : route('client.store') }}" method="POST">
                @isset($client)
                    @method("put")
                @endisset
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Id</label>
                            <input type="number" value="{{ isset($client) ? $client->id : "" }}"  class="form-control" disabled>
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

