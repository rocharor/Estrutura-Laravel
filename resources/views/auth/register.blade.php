@extends('layouts.app')

@section('content')
    <div class="register-box-body">
        <p class="login-box-msg">Cadastre-se</p>

        <form action="{{ url('/register') }}" method="post">
            {{ csrf_field() }}
            
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name='name' id="name" placeholder="Full name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name='email' id="email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name='password' id="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name='password_confirmation' id="password-confirm" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Eu concordo com os <a href="#">termos</a>
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                </div>
            </div>
        </form>

        {{-- <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div> --}}

        <a href="{{ Route('login') }}" class="text-center">J&aacute; tenho uma conta</a>
    </div>
@endsection
