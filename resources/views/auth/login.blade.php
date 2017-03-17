@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="divider"></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
                <h2>Universidad de Cundinamarca</h2>
                <div class="panel-body">
                    <form class="form-horizontal big-form" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <label for="name">Inicia Sesión</label>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" placeholder="Correo..." name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <input id="password" type="password" class="form-control" placeholder="Contraseña..." name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Iniciar Sesión
                            </button>

                            <a href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                            <a href="{{ url('/register') }}">¿No te has registrado?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
