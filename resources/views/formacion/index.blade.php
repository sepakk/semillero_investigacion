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
                            <tr>
                                <td>Pregrado</td>
                                <td>Presencial</td>
                                <td>Ingeniería de Sistemas</td>
                                <td>10</td>
                                <td>Sí</td>
                                <td>U Nacional</td>
                                <td>123321</td>
                            </tr>
                        </tbody>
                    </table>

                        <a class="btn btn-success" href="/formacion/create">Agregar Nueva Formación</a>
                </div>
                
            </div>
        </div>
</div>
@endsection
