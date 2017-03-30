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
                <h2>Escalafón</h2>
                <div style="overflow-x:auto;">
                    <table class="table table-striped table-responsive">
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
                                        <td><a href="">Ver</a> </td>
                                    @else
                                        <a target="_blank" href="<?="/Escalafon/certificaciones/".$escalafon->anexo;?>">Ver</a> 
                                    @endif
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
                <div class="form-group">
                    <a href="escalafones/create"><button class="btn btn-success">Agregar Escalafon</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
