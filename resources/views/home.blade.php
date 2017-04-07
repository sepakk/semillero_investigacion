@extends('layouts.admin') @section('contenido')
<div class="container">
    <div class="divider"></div>

    <div class="columns">
        @include('layouts.sidebar')
        <div class="content">
            <div class="information-header">
                <div class="user-image">

                </div>
                @if (!Auth::guest())
                <div class="sub-header">
                    <h3>{{ $informacionpersonal->nombre }} {{ $informacionpersonal->apellidos }}</h3>
                    @if (!empty($correo))
                    <p>{{ $correo->correo_nombre }}</p>
                    @endif
                </div>
                @endif
            </div>
            <hr>
            <div class="information-container">
                <h2>Información Personal</h2>
                <p><b>Nombre: </b>{{ $informacionpersonal->nombre }}</p>
                <p><b>Apellido: </b>{{ $informacionpersonal->apellidos }}</p>

                @if ($informacionpersonal->genero==1)
                <p><b>Género: </b>Masculino</p>
                @else @if ($informacionpersonal->genero==2)
                <p><b>Género: </b>Femenino</p>
                @else
                <p><b>Género: </b></p>
                @endif @endif @if ($informacionpersonal->estado_civil==1)
                <p><b>Estado Civil: </b>Soltero</p>
                @else @if ($informacionpersonal->estado_civil==2)
                <p><b>Estado Civil: </b>Casado</p>
                @else
                <p><b>Estado Civil: </b></p>
                @endif @endif
                <?php $cont=0; ?> @foreach($paises as $pa) @if($pa->cod_pais == $informacionpersonal->nacionalidad)
                <p><b>Nacionalidad: </b>{{ $pa->nombre_pais}}</p>
                <?php $cont=1; ?> @endif @endforeach @if($cont==0)
                <p><b>Nacionalidad: </b></p>
                <?php $cont=1; ?>@endif @if($informacionpersonal->libreta_militar==null)
                <p><b>Libreta Militar: </b>No</p>
                @else
                <p><b>Libreta Militar: </b>Si</p>
                @endif
                <p><b>Fecha de Nacimiento: </b>{{$informacionpersonal->fecha_nacimiento }}</p>

                @foreach($paises as $pa) 
                    @if(!empty($departamento)) 
                        @if(!empty($ciudad)) 
                            @if($pa->cod_pais == $departamento->cod_pais)
                                <p><b>Lugar de Nacimiento: </b>{{ $ciudad->nombre_ciudad}} - {{$departamento->nombre_departamento}} ( {{$pa->nombre_pais}})</p>
                            @endif 
                        @else
                            <p><b>Lugar de Nacimiento: </b>{{ $departamento->nombre_departamento}} ({{$pa->nombre_pais }})</p>
                        @endif
                    @else
                        @if($pais==$pa->cod_pais)
                            <p><b>Lugar de Nacimiento: </b>{{$pa->nombre_pais }}</p>
                        @endif
                        <?php $cont=2; ?> 
                    @endif 
                @endforeach 
                @if($cont==1)
                    <p><b>Lugar de Nacimiento: </b></p>
                @endif
                <p><b>Dirección: </b>{{ $informacionpersonal->direccion }}</p>

                @if (!empty($correo))
                    <p><b>E-mail: </b>{{ $correo->correo_nombre }}</p>
                @endif
            </div>
            <hr>
            <div class="information-container">
                <h2>Perfeccionamiento</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Entidad</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Terminación</th>
                            <th>Intensidad Horaria</th>
                            <th>Puntaje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>U Nacional</td>
                            <td>14 de Octubre de 2001</td>
                            <td>15 de Mayo de 2002</td>
                            <td>120 horas</td>
                            <td>60/80</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="information-container">
                <h2>Formación Académica</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nivel</th>
                            <th>Modalidad</th>
                            <th>Nombre</th>
                            <th>Número de Semestres</th>
                            <th>Graduado</th>
                            <th>Institución</th>
                            <th>Tarjeta Profesional</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($formaciones as $formacion)
                        <tr>
                            <td>{{$formacion->nivel->nombre_nivel}}</td>
                            <td>{{$formacion->modalidad}}</td>
                            <td>{{$formacion->programa_academico}}</td>
                            <td>{{$formacion->no_semestres}}</td>
                            <td>
                                @if($formacion->graduado == 1) Sí @else No @endif
                            </td>
                            <td>{{$formacion->nombre_institucion}}</td>
                            <td>{{$formacion->no_tarjeta_profesional}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="information-container">
                <h2>Escalafón</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Certificación</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($escalafones as $escalafon)
                        <tr>
                            <td>{{$escalafon->tipo->nombre_escalafon}}</td>
                            <td>
                                @if($escalafon->anexo==null)
                                <a href="">Ver</a> @else
                                <a href="<?=" /Escalafon/certificaciones/ ".$escalafon->anexo; ?>">Ver</a> @endif
                            </td>
                            <td>
                                <a href="{{URL::action('EscalafonController@edit',$escalafon->cod_escalafon)}}"><button class="btn btn-info">Editar</button></a>
                            </td>
                            <td>
                                <a href="" data-target="#modal-delete-{{$escalafon->cod_escalafon}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('escalafon.modal') @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="information-container">
                <h2>Idioma</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Idioma</th>
                            <th>Lo habla</th>
                            <th>Lo lee</th>
                            <th>Lo escribe</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($idiomas as $idioma)
                        <tr>
                            <td>{{$idioma->idioma->nombre_idioma}}</td>
                            <td>
                                @if ($idioma->habla == '0') Regular @elseif($idioma->habla == '1') Medio @else Muy Bien @endif
                            </td>
                            <td>
                                @if ($idioma->lectura == '0') Regular @elseif($idioma->lectura == '1') Medio @else Muy Bien @endif
                            </td>
                            <td>
                                @if ($idioma->escritura == '0') Regular @elseif($idioma->escritura == '1') Medio @else Muy Bien @endif
                            </td>
                            <td>
                                {{Form::open([ 'class' => 'no-form', 'method' => 'delete', 'route' => [ 'idioma.destroy', $idioma->cod_idioma ] ])}} {{ Form::hidden('cod_idioma', $idioma->cod_idioma) }} {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }} {{ Form::close() }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="information-container">
                <h2>Producción</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Categoría</th>
                            <th>Tipo</th>
                            <th>Certificado</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>III</td>
                            <td>Articulo</td>
                            <td><a href="">ver</a></td>
                            <td>14 de Mayo de 2010</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="information-container">
                <h2>Experiencia Laboral</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Cargo</th>
                            <th>Entidad</th>
                            <th>Dirección</th>
                            <th>Ciudad</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Terminación</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($experiencias as $exp)
                        <tr>
                            <td>{{$exp->exp->nombre_experiencia_calificada}}</td>
                            <td>{{$exp->entidad}}</td>
                            <td>{{$exp->direccion_entidad}}</td>
                            <td>{{$exp->ciudad->nombre_ciudad}}</td>
                            <td>{{$exp->telefono}}</td>
                            <td>{{$exp->correo_electronico}}</td>
                            <td>{{$exp->fecha_inicio}}</td>
                            <td>{{$exp->fecha_retiro}}</td>
                            <td>
                                {{Form::open([ 'class' => 'no-form', 'method' => 'delete', 'route' => [ 'experiencia.destroy', $exp->cod_info_exp ] ])}} {{ Form::hidden('cod_info_exp', $exp->cod_info_exp) }} {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }} {{ Form::close() }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
