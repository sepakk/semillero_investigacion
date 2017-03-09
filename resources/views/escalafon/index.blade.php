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
                                <td><a href="">Ver</a></td>
                                <td>
                                    {{Form::open([ 'class' => 'no-form', 'method'  => 'delete', 'route' => [ 'escalafon.destroy', $escalafon->cod_escalafon ] ])}}
                                        {{ Form::hidden('cod_escalafon', $escalafon->cod_escalafon) }}
                                        {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}
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
