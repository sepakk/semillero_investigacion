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
                    <h2>Perfeccionamiento</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Entidad</th>
                                <th>Nombre</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Terminación</th>
                                <th>Intensidad Horaria</th>
                                <th>Puntaje</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($perfeccionamientos as $per)
                                <tr>
                                    <td>{{$per->entidad}}</td>
                                    <td>{{$per->nombre}}</td>
                                    <td>{{$per->fecha_inicio}}</td>
                                    <td>{{$per->fecha_fin}}</td>
                                    <td>{{$per->intensidad_horaria}}</td>
                                    <td>{{$per->puntaje_perfeccionamiento}}</td>
                                    <td>
                                        {{Form::open([ 'class' => 'no-form', 'method'  => 'delete', 'route' => [ 'perfeccionamiento.destroy', $per->cod_perfeccionamiento ] ])}}
                                            {{ Form::hidden('cod_perfeccionamiento', $per->cod_perfeccionamiento) }}
                                            {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-success" href="/perfeccionamiento/create">Agregar Nuevo Perfeccionamiento</a>
            </div>
        </div>
</div>
@endsection
