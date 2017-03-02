@extends('layouts.admin')

@section('contenido')
<div class="container">
    <div class="divider"></div>

        <div class="columns">
            <ul>
                <li>
                    <a href="">Inicio</a>
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
                    <p><b>Género: </b>{{ $informacionpersonal->genero }}</p>
                    <p><b>Estado Civil: </b>{{ $informacionpersonal->estado_civil }}</p>
                    <p><b>Nacionalidad: </b>{{ $informacionpersonal->nacionalidad}}</p>
                    <p><b>Libreta Militar: </b>{{ $informacionpersonal->libreta_militar }}</p>
                    <p><b>Fecha de Nacimiento: </b>{{$informacionpersonal->fecha_nacimiento }}</p>
                    <p><b>Lugar de Nacimiento: </b>{{ $informacionpersonal->lugar_nacimiento }}</p>
                    <p><b>Dirección: </b>{{ $informacionpersonal->direccion }}</p>
                    
                    @if (!empty($correo)) 
                            <p><b>E-mail: </b>{{ $correo->correo_nombre }}</p>
                        @endif
                </div>

                <a href="">Editar</a>
                
            </div>
        </div>
</div>
@endsection
