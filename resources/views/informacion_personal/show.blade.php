@extends('layouts.admin')

@section('contenido')
<div class="container">
    <div class="divider"></div>

        <div class="columns">
            <ul>
                <li>
                    <a href="/home">Inicio</a>
                </li>
                
                <li>
                    <a href="">Información Personal</a>
                </li>
                @if($usuario->tipoUsuario!=1)
                <li>
                    <a href="">Idiomas</a>
                </li>

                <li>
                    <a href="">Perfeccionamiento</a>
                </li>

                <li>
                    <a href="">Formación Académica</a>
                </li>

                <li>
                    <a href="">Escalafón</a>
                </li>

                <li>
                    <a href="">Experiencia Laboral</a>
                </li>

                <li>
                    <a href="">Producción</a>
                </li>
                @endif
                <li>
                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </li>
            </ul>
                <?php 
                    if($usuario->tipoUsuario==1){ echo("Eres El Puto Amo");/*include('menus/submenu_admin.php');*/ }   
                    if($usuario->tipoUsuario!=1){ echo("Buena socito");/*include('menus/submenu_standard.php');*/ }    ?>
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
                        <p><b>Género: </b>Femenino</p>
                    @endif

                    @if ($informacionpersonal->estado_civil==1)
                        <p><b>Estado Civil: </b>Soltero</p>
                    @else
                        <p><b>Estado Civil: </b>Casado</p>
                    @endif
                    <?php $cont=0; ?>
                    @foreach($paises as $pa)
                        @if($pa->cod_pais == $informacionpersonal->nacionalidad)
                            <p><b>Nacionalidad: </b>{{ $pa->nombre_pais}}</p>
                            <?php $cont=1; ?>
                        @endif
                    @endforeach
                    @if($cont==0) <p><b>Nacionalidad: </b></p><?php $cont=1; ?>;@endif
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
