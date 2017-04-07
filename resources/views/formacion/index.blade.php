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
            <div class="information-container">
                <h2>Formación Académica</h2>
                <div style="overflow-x:auto;">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Nivel</th>
                                <th>Modalidad</th>
                                <th>Nombre</th>
                                <th>Institución</th>
                                <th>Número de Semestres</th>
                                <th>Graduado</th>
                                <th>Tarjeta Profesional</th>
                                <th>Certificado</th>
                                <th>Fecha de Graduacion</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($formaciones as $formacion)
                            <tr>
                                <td>{{$formacion->nivel->nombre_nivel}}</td>
                                <td>{{$formacion->modalidad->nombre_modalidad}}</td>
                                <td>{{$formacion->programa_academico}}</td>
                                <td>{{$formacion->nombre_institucion}}</td>
                                <td>{{$formacion->no_semestres}}</td>
                                @if($formacion->graduado == 1)
                                <td>
                                    Sí
                                </td>
                                <td>{{$formacion->no_tarjeta_profesional}}</td>
                                @if($formacion->certificado==null)
                                    <td><a href="">Ver</a></td> 
                                @else
                                    <td><a target="_blank" href='<?="Produccion/certificaciones/".$formacion->certificado;?>'>Ver</a></td>
                                @endif
                                <td>{{$formacion->fecha_terminacion}}</td>
                                @else
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                @endif
                                <td>
                                    {{Form::open([ 'class' => 'no-form', 'method' => 'delete', 'route' => [ 'formacion.destroy', $formacion->cod_formacion ] ])}} 
                                        {{ Form::hidden('cod_formacion', $formacion->cod_formacion) }} {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }} 
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-success" href="/formacion/create">Agregar Nueva Formación</a>
            </div>

        </div>
    </div>
</div>
@endsection
