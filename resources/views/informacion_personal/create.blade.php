@extends('layouts.admin')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                 <h1>Agregue sus datos de Información Personal</h1>
                <h2>Universidad de Cundinamarca</h2>
                
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <label for="name">Ingrese sus datos</label>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <input id="name" type="text" class="form-control" name="name" placeholder="Nombres..." value="{{ old('name') }}" required autofocus>
                            
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

                            <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Apellidos..." value="{{ old('lastname') }}" required autofocus>
                            
                            @if ($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">

                            <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección..." value="{{ old('direccion') }}" required autofocus>
                            
                            @if ($errors->has('direccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">

                            <label for="genre">Género</label>
                            <select name="genre">
                                <option value='m'>Masculino</option>
                                <option value='f'>Femenino</option>
                            </select>
                            
                            @if ($errors->has('genre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('genre') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('civil') ? ' has-error' : '' }}">

                            <label for="civil">Estado Civil</label>
                            <select name="civil">
                                <option value = 's'>Soltero</option>
                                <option value = 'c'>Casado</option>
                            </select>
                            
                            @if ($errors->has('civil'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('civil') }}</strong>
                                </span>
                            @endif
                        
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">

                            <label for="country">Nacionalidad</label>
                            <select name="country">
                                <option value="">Seleccione Nacionalidad</option>
                                @foreach($paises as $pa)
                                    <option value="{{$pa->cod_pais}}">{{$pa->nombre_pais}}</option>
                                @endforeach
                            </select>
                            
                            @if ($errors->has('country'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('libreta') ? ' has-error' : '' }}">

                            <label for="libreta">Libreta Militar?</label>

                            <div class="libreta">
                                <input id="libreta" type="checkbox" class="form-control" name="libreta" value="{{ old('libreta') }}" required autofocus>

                                <input id="file" type="file" class="form-control" name="file" value="{{ old('file') }}" required autofocus>
                            </div>
                            @if ($errors->has('libreta'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('libreta') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('nacimiento') ? ' has-error' : '' }}">

                            <label for="nacimiento">Fecha de Nacimiento: </label>
                            <input id="nacimiento" type="date" class="form-control" name="nacimiento"  value="{{ old('nacimiento') }}" required autofocus>
                            
                            @if ($errors->has('nacimiento'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nacimiento') }}</strong>
                                </span>
                            @endif
                        </div>

                         <div class="form-group{{ $errors->has('lugar') ? ' has-error' : '' }}">

                            <label for="civil">Lugar de Nacimiento</label>
                            
                            <select name="país">
                                <option value="">Seleccione Pais</option>
                                @foreach($paises as $pa)
                                    <option value="{{$pa->cod_pais}}">{{$pa->nombre_pais}}</option>
                                @endforeach
                            </select>
                            <select name="departamento">
                                <option value='0'>Departamento</option>
                            </select>
                            
                            <select name="ciudad">
                                <option value='0'>Ciudad</option>
                            </select>
                            
                            @if ($errors->has('lugar'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lugar') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Agregar Datos
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
