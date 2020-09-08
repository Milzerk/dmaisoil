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
            <h4 class="title">Novo Cliente</h4>
        </div>
        <div class="content">
            <form action="{{ route('registerClient.do') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" value="{{ old('name') }}"  class="form-control " placeholder="Nome" >
                            @error('name') <p class="small text-danger">{{$errors->first('name')}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}"  class="form-control " placeholder="Telefone" >
                            @error('phone') <p class="small text-danger">{{$errors->first('phone')}}</p> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" >
                            @error('email') <p class="small text-danger">{{$errors->first('email')}}</p> @enderror
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
                type: 'info',
                timer: 4000
            });
        });
    </script>
@endif

@endsection

