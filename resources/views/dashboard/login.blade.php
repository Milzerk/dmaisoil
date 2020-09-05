<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D+ Oil Change</title>
    <link href="{{ asset('auth/css/login.css') }}" rel="stylesheet" />
    <link href="{{ asset('auth/css/bootstrap.min.css') }}" rel="stylesheet" />
</head>
<body>   
    <div class="container-fluid">
        <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
            <div class="container">
                <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                    @error('auth')
                        <div class="alert alert-danger">
                            <span>{{$errors->first('auth')}}</span>
                        </div>
                    @enderror
                    <h3 class="login-heading mb-4">Bem Vindo de volta!</h3>
                    <form method="POST" action="{{ route('login.do') }}">
                    @csrf
                    <div class="form-label-group">
                        <input type="text" id="user" name="user" class="form-control @error('user') is-invalid @enderror" placeholder="Usuário"  autofocus>
                        <label for="user">Usuário</label>
                        @error('user') <p class="small text-danger">{{$errors->first('user')}}</p> @enderror
                    </div>
    
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Senha" >
                        <label for="inputPassword">Senha</label>
                        @error('password') <p class="small text-danger">{{$errors->first('password')}}</p> @enderror
                    </div>
    
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" name="remember" class="custom-control-input" id="remember">
                        <label class="custom-control-label" for="remember">Lembre-se de mim.</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Entrar</button>
                    <div class="text-center">
                        <a class="small" href="#">Esqueceu sua senha?</a></div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <script src="{{ asset('auth/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('auth/scripts/bootstrap.bundle.min.js') }}"></script>

    </body>
</html>