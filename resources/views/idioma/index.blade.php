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
                        <h2>Idioma</h2>
                        <div style="overflow-x:auto;">
                            <table class="table table-striped table-responsive">
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
                                                @if ($idioma->habla == '0')
                                                    Regular
                                                @elseif($idioma->habla == '1')
                                                    Medio
                                                @else
                                                    Muy Bien
                                                @endif
                                            </td>
                                            <td>
                                                @if ($idioma->lectura == '0')
                                                    Regular
                                                @elseif($idioma->lectura == '1')
                                                    Medio
                                                @else
                                                    Muy Bien
                                                @endif
                                            </td>
                                            <td>
                                                @if ($idioma->escritura == '0')
                                                    Regular
                                                @elseif($idioma->escritura == '1')
                                                    Medio
                                                @else
                                                    Muy Bien
                                                @endif
                                            </td>
                                            <td><a href="" data-target="#modal-delete-{{$idioma->cod_idioma}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                            </td>
                                        </tr>
                                    @include('idioma.modal')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a class="btn btn-success" href="/idioma/create">Agregar Nuevo Idioma</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
