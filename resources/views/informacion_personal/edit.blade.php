@extends('layouts.admin')

@section('contenido')
<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                 <h1>Agregue sus datos de Información Personal</h1>
                <h2>Universidad de Cundinamarca</h2>
                
                <div class="panel-body">
                    {!!Form::model($informacionpersonal,['method'=>'PATCH','route'=>['informacion.update',$informacionpersonal->documento_identificacion],'files'=>true])!!}
                    {{Form::token()}}
                        <label for="name">Ingrese sus datos</label>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <input id="name" type="text" class="form-control" name="nombre" placeholder="Nombres..." value="{{ $informacionpersonal->nombre}}" required autofocus>
                            
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

                            <input id="lastname" type="text" class="form-control" name="apellidos" placeholder="Apellidos..." value="{{ $informacionpersonal->apellidos}}" required autofocus>
                            
                            @if ($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        @if($informacionpersonal->direccion!=null)
                            <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección..." value="{{$informacionpersonal->direccion}}" required autofocus>
                        @else
                            <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección..." value="{{ old('direccion') }}" required autofocus>
                        @endif
                            @if ($errors->has('direccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group{{ $errors->has('gener') ? ' has-error' : '' }}">

                            <label for="genero">Género</label>
                            <select name="genero">
                                @if($informacionpersonal->genero=='1')
                                    <option value='1' selected="">Masculino</option>
                                    <option value='2'>Femenino</option>
                                    @else
                                    <option value='1'>Masculino</option>
                                    <option value='2' selected="">Femenino</option>
                                    @endif
                            </select>
                            
                            @if ($errors->has('gener'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gener') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">

                            <label for="estado_civil">Estado Civil</label>
                            <select name="estado_civil">
                                @if($informacionpersonal->estado_civil=='1')
                                    <option value='1' selected="">Soltero</option>
                                    <option value='2'>Casado</option>
                                    @else
                                    <option value='1'>Soltero</option>
                                    <option value='2' selected="">Casado</option>
                                    @endif
                            </select>
                            
                            @if ($errors->has('estado_civil'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('estado_civil') }}</strong>
                                </span>
                            @endif
                        
                        </div>

                        <div class="form-group{{ $errors->has('nacionalidad') ? ' has-error' : '' }}">

                            <label for="nacionalidad">Nacionalidad</label>
                            <select name="nacionalidad">
                                @if ($informacionpersonal->nacionalidad==null) 
                                    <option value="" selected="">Seleccione Nacionalidad</option>
                                @else
                                    @foreach($paises as $pa)
                                @if($informacionpersonal->nacionalidad==$pa->cod_pais)
                                    <option value="{{$informacionpersonal->nacionalidad}}">{{$pa->nombre_pais}}</option>
                                @endif
                                @endforeach
                                @endif
                                @foreach($paises as $pa)
                                    <option value="{{$pa->cod_pais}}">{{$pa->nombre_pais}}</option>
                                @endforeach
                            </select>
                            
                            @if ($errors->has('nacionalidad'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nacionalidad') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('libreta') ? ' has-error' : '' }}">

                            <label for="libreta">Libreta Militar?</label>

                            <div class="libreta">
                                <input id="libreta" type="checkbox" class="form-control" name="libreta" value="{{ old('libreta') }}" autofocus>

                                <input id="file" type="file" class="form-control hidden" name="file" value="{{ old('file') }}" autofocus>
                            </div>
                            @if ($errors->has('libreta'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('libreta') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('nacimiento') ? ' has-error' : '' }}">

                            <label for="nacimiento">Fecha de Nacimiento: </label>
                            @if($informacionpersonal->fecha_nacimiento!=null)
                            <input id="nacimiento" type="date" class="form-control" name="fecha_nacimiento"  value="{{ $informacionpersonal->fecha_nacimiento }}" autofocus>
                            @else
                            <input id="nacimiento" type="date" class="form-control" name="fecha_nacimiento" autofocus>
                            @endif
                            @if ($errors->has('nacimiento'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nacimiento') }}</strong>
                                </span>
                            @endif
                        </div>

                         <div class="form-group{{ $errors->has('lugar') ? ' has-error' : '' }}">

                            <label for="civil">Lugar de Nacimiento</label>
                            
                            <select name="país">
                                @if ($informacionpersonal->lugar_nacimiento==null) 
                                    
                                <option value="" selected="">Seleccione Pais</option>
                                @else
                                @foreach($paises as $pa)
                                @if($informacionpersonal->lugar_nacimiento==$pa->cod_pais)
                                    <option value="{{$informacionpersonal->lugar_nacimiento}}">{{$pa->nombre_pais}}}</option>
                                @endif
                                @endforeach
                                @endif
                                @foreach($paises as $pa)
                                    <option value="{{$pa->cod_pais}}">{{$pa->nombre_pais}}</option>
                                @endforeach
                            </select>
                            <select name="departamento" id="departamento" class="hidden">
                                @foreach($departamentos as $deptos)
                                    <option value="{{$deptos->cod_departamento}}">{{$deptos->nombre_departamento}}</option>
                                @endforeach
                                <option value='' selected="">Seleccione Departamento</option>
                            </select>
                            
                            <select name="ciudad" id="ciudad" class="hidden" placeholder=>
                                <option value='' selected="">Seleccione Ciudad</option>
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
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection