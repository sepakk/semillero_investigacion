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
                    <h2>Información Personal</h2>
                    <p><b>Nombre: </b>{{ $informacionpersonal->nombre }}</p>
                    <p><b>Apellido: </b>{{ $informacionpersonal->apellidos }}</p>

                    @if ($informacionpersonal->genero==1)
                        <p><b>Género: </b>Masculino</p>
                    @else
                        @if ($informacionpersonal->genero==2)
                            <p><b>Género: </b>Femenino</p>
                        @else
                            <p><b>Género: </b></p>
                        @endif
                    @endif 
                    @if ($informacionpersonal->estado_civil==1)
                        <p><b>Estado Civil: </b>Soltero</p>
                    @else
                        @if ($informacionpersonal->estado_civil==2)
                            <p><b>Estado Civil: </b>Casado</p>
                        @else
                            <p><b>Estado Civil: </b></p>
                        @endif
                    @endif
                    <?php $cont=0; ?>
                    @foreach($paises as $pa)
                        @if($pa->cod_pais == $informacionpersonal->nacionalidad)
                            <p><b>Nacionalidad: </b>{{ $pa->nombre_pais}}</p>
                            <?php $cont=1; ?>
                        @endif
                    @endforeach
                    @if($cont==0) <p><b>Nacionalidad: </b></p><?php $cont=1; ?>@endif
                    @if($informacionpersonal->libreta_militar==null)
                    <p><b>Libreta Militar: </b>No</p>
                    @else
                    <p><b>Libreta Militar: </b>Si</p>
                    @endif
                    <p><b>Fecha de Nacimiento: </b>{{$informacionpersonal->fecha_nacimiento }}</p>
                    
                    @foreach($paises as $pa)
                        @if(!empty($departamento))
                            @if(!empty($ciudad))
                                @if($pa->cod_pais == $departamento->cod_pais)
                                    <p><b>Lugar de Nacimiento: </b>{{ $ciudad->nombre_ciudad}} - {{$departamento->nombre_departamento}} ( {{$pa->nombre_pais}})</p>
                                @endif
                            @else
                                <p><b>Lugar de Nacimiento: </b>{{ $departamento->nombre_departamento}} ({{$pa->nombre_pais }})</p>
                            @endif
                            <?php $cont=2; ?>
                        @endif
                    @endforeach

                    @if($cont==1) <p><b>Lugar de Nacimiento: </b></p>@endif
                    <p><b>Dirección: </b>{{ $informacionpersonal->direccion }}</p>
                    
                    @if (!empty($correo)) 
                            <p><b>E-mail: </b>{{ $correo->correo_nombre }}</p>
                    @endif
                </div>

                <a href="informacion/edit">Editar</a>
                
            </div>
        </div>
</div>
@endsection
