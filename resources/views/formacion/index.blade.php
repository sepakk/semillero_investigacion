@extends('layouts.admin')

@section('contenido')
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
                                    @if($formacion->graduado == 1)
                                        Sí
                                    @else
                                        No
                                    @endif
                                </td>
                                <td>{{$formacion->nombre_institucion}}</td>
                                <td>{{$formacion->no_tarjeta_profesional}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a class="btn btn-success" href="/formacion/create">Agregar Nueva Formación</a>
                </div>
                
            </div>
        </div>
</div>
@endsection
