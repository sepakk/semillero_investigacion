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
                                        {{Form::open([ 'class' => 'no-form', 'method'  => 'delete', 'route' => [ 'experiencia.destroy', $exp->cod_info_exp ] ])}}
                                            {{ Form::hidden('cod_info_exp', $exp->cod_info_exp) }}
                                            {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <a class="btn btn-success" href="/experiencia/create">Agregar Nueva Experiencia</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
