@extends('layouts.admin') @section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <a class="button-back" href="/informacion">Volver</a>
                <h1>Agregue sus datos de Información Personal</h1>
                <h2>Universidad de Cundinamarca</h2>

                <div class="panel-body">
                    {!!Form::model($informacionpersonal,['method'=>'PATCH','route'=>['informacion.update',$informacionpersonal->documento_identificacion],'files'=>true, 'class' => 'big-form'])!!} {{Form::token()}}
                    <label for="name">Ingrese sus datos</label>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="nombre" placeholder="Nombres..." value="{{ $informacionpersonal->nombre}}" required autofocus> @if ($errors->has('name'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span> @endif
                    </div>

                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

                        <input id="lastname" type="text" class="form-control" name="apellidos" placeholder="Apellidos..." value="{{ $informacionpersonal->apellidos}}" required autofocus> @if ($errors->has('lastname'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span> @endif
                    </div>

                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        @if($informacionpersonal->direccion!=null)
                        <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección..." value="{{$informacionpersonal->direccion}}" required autofocus> @else
                        <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección..." value="{{ old('direccion') }}" required autofocus> @endif @if ($errors->has('direccion'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span> @endif
                    </div>


                    <div class="form-group{{ $errors->has('gener') ? ' has-error' : '' }}">

                        <label for="genero">Género</label>
                        <select class="form-control" name="genero">
                                @if($informacionpersonal->genero=='1')
                                    <option value='1' select class="form-control"ed="">Masculino</option>
                                    <option value='2'>Femenino</option>
                                    @else
                                    <option value='1'>Masculino</option>
                                    <option value='2' select class="form-control"ed="">Femenino</option>
                                    @endif
                            </select> @if ($errors->has('gener'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('gener') }}</strong>
                                </span> @endif
                    </div>

                    <div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">

                        <label for="estado_civil">Estado Civil</label>
                        <select class="form-control" name="estado_civil">
                                @if($informacionpersonal->estado_civil=='1')
                                    <option value='1' select class="form-control"ed="">Soltero</option>
                                    <option value='2'>Casado</option>
                                    @else
                                    <option value='1'>Soltero</option>
                                    <option value='2' select class="form-control"ed="">Casado</option>
                                    @endif
                            </select> @if ($errors->has('estado_civil'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('estado_civil') }}</strong>
                                </span> @endif

                    </div>

                    <div class="form-group{{ $errors->has('nacionalidad') ? ' has-error' : '' }}">

                        <label for="nacionalidad">Nacionalidad</label>
                        <select class="form-control" name="nacionalidad">
                                @if ($informacionpersonal->nacionalidad==null) 
                                    <option value="" select class="form-control"ed="">Seleccione Nacionalidad</option>
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
                            </select> @if ($errors->has('nacionalidad'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('nacionalidad') }}</strong>
                                </span> @endif
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
                                </span> @endif
                    </div>

                    <div class="form-group{{ $errors->has('nacimiento') ? ' has-error' : '' }}">

                        <label for="nacimiento">Fecha de Nacimiento: </label> @if($informacionpersonal->fecha_nacimiento!=null)
                        <input id="nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="{{ $informacionpersonal->fecha_nacimiento }}" autofocus> @else
                        <input id="nacimiento" type="date" class="form-control" name="fecha_nacimiento" autofocus> @endif @if ($errors->has('nacimiento'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('nacimiento') }}</strong>
                                </span> @endif
                    </div>

                    <div class="form-group{{ $errors->has('lugar') ? ' has-error' : '' }}">

                        <label for="civil">Lugar de Nacimiento</label>

                        <select class="form-control" name="país">
                                @if ($informacionpersonal->lugar_nacimiento==null) 
                                    
                                <option value="0" select class="form-control"ed="">Seleccione Pais</option>
                                @else
                                @foreach($paises as $pa)
                                @if($informacionpersonal->lugar_nacimiento==$pa->cod_pais)
                                    <option value="{{$informacionpersonal->lugar_nacimiento}}">{{$pa->nombre_pais}}}</option>
                                @endif
                                @endforeach
                                @endif
                                
                                <?php 
                                $pais=0;
                                $depto=0;
                                $ciudada=0;
                                    if ($informacionpersonal->lugar_nacimiento!=null) {
                                        $string = $informacionpersonal->lugar_nacimiento;
                                        $token = strtok($string, ".");
                                        $cont=0;
                                        while ($token !== false){
                                            if ($cont==0) {
                                                $pais=$token;
                                            }
                                            if ($cont==1) {
                                                $depto=$token;
                                            }
                                            if ($cont==2) {
                                                $ciudada=$token;
                                            }
                                            $cont++;
                                            $token = strtok(".");
                                        } 
                                    }
                                 ?>
                                @foreach($paises as $pa)
                                    @if($pais==$pa->cod_pais)
                                        <option value="{{$pa->cod_pais}}" selected="" class="form-control">{{$pa->nombre_pais}}</option>
                                    @else
                                        <option value="{{$pa->cod_pais}}">{{$pa->nombre_pais}}</option>
                                    @endif
                                @endforeach
                            </select> @if($depto!=0)
                        <select class="form-control" name="departamento" id="departamento">
                                @foreach($departamentos as $deptos)
                                    @if($depto==$deptos->cod_departamento)
                                        <option value="{{$deptos->cod_departamento}}" selected="" class="form-control">{{$deptos->nombre_departamento}}</option>
                                    @else
                                        <option value="{{$deptos->cod_departamento}}">{{$deptos->nombre_departamento}}</option>
                                    @endif
                                @endforeach
                            </select> @else
                        <select class="form-control hidden" name="departamento" id="departamento">
                                <option value="0">Seleccione Departamento</option>
                                @foreach($departamentos as $deptos)
                                        <option value="{{$deptos->cod_departamento}}">{{$deptos->nombre_departamento}}</option>
                                @endforeach
                            </select> @endif @if($ciudada!=0)
                        <select class="form-control" name="ciudad" id="ciudad">
                                <option value="{{$ciudad->cod_ciudad}}">{{$ciudad->nombre_ciudad}}</option>
                            @else
                                <select class="form-control hidden" name="ciudad" id="ciudad" >
                                    <option value="0" select class="form-control"ed="">Seleccione Ciudad</option>
                            @endif
                            </select>
                        <span class="help-block">
                                    <strong>{{ $errors->first('lugar') }}</strong>
                                </span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                                Editar Datos
                            </button>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
