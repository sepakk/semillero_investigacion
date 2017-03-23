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
                <hr>
                <div class="information-container">
                    <h2>Producción</h2>
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Categoría</th>
                                <th>Certificado</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($producciones as $prod)
                                <tr>
                                    <td>{{$prod->categoria->tipo->nombre_produccion}}</td>
                                    <td>{{$prod->categoria->tipo->nombre_produccion}}</td>
                                    <td><a href="">ver</a></td>
                                    <td>{{$prod->categoria->tipo->nombre_produccion}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-success" href="/produccion/create">Agregar Nueva Producción</a>
            </div>
        </div>
</div>
@endsection
