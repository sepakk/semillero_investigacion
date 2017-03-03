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
                    <a href="/informacion">Información Personal</a>
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
                <hr>
                <div class="information-container">
                    <h2>Perfeccionamiento</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Entidad</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Terminación</th>
                                <th>Intensidad Horaria</th>
                                <th>Puntaje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>U Nacional</td>
                                <td>14 de Octubre de 2001</td>
                                <td>15 de Mayo de 2002</td>
                                <td>120 horas</td>
                                <td>60/80</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
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
                </div>
                <hr>
                <div class="information-container">
                    <h2>Escalafón</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Certificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Maestro</td>
                                <td><a href="">Ver</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="information-container">
                    <h2>Producción</h2>
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Categoría</th>
                                <th>Tipo</th>
                                <th>Certificado</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>III</td>
                                <td>Articulo</td>
                                <td><a href="">ver</a></td>
                                <td>14 de Mayo de 2010</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
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
                                <th>Tipo</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Terminación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Asistente</td>
                                <td>Alcaldía</td>
                                <td>Carrera 5</td>
                                <td>Fusagasugá</td>
                                <td>867 55 56</td>
                                <td>melopela@gmail.com</td>
                                <td>II</td>
                                <td>4 de Octubre de 2008</td>
                                <td>5 de Noviembre de 2012</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection
