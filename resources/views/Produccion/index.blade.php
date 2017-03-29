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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($producciones as $prod)
                                <tr>
                                    <td>{{$prod->categoria->nombre_categoria}}</td>
                                    <td>{{$prod->categoria->tipo->nombre_produccion}}</td>
                                     @if($prod->anexo==null)
                                        <td><a href="">Ver</a> </td>
                                    @else
                                        <td><a target="_blank" href='<?="/Produccion/certificaciones/".$prod->anexo;?>'>Ver</a></td> 
                                    @endif
                                    <td>{{$prod->fecha}}</td>
                                    <td>
                                        {{Form::open([ 'class' => 'no-form', 'method'  => 'delete', 'route' => [ 'producciones.destroy', $prod->cod_info_cat ] ])}}
                                            {{ Form::hidden('cod_info_cat', $prod->cod_info_cat) }}
                                            {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-success" href="/producciones/create">Agregar Nueva Producción</a>
            </div>
        </div>
</div>
@endsection
