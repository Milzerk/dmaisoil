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
            <h4 class="title pull-left">Usuários</h4>
            <a href="{{ route('user.create') }}" class="btn btn-info btn-fill pull-right">Novo Usuário</a>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->user}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-warning pe-7s-pen btn-fill pull-right"></a></td>
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