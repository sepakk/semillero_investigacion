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
                <li>
                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                     href="{{ route('logout') }}" >Salir</a>
                </li>
            </ul>

            <div class="content">
                <div class="information-header">
                    <div class="user-image">
                        
                    </div>
                    @if (!Auth::guest())
                    <div class="sub-header">
                        <h3>{{ Auth::user()->name }} {{ Auth::user()->apellidos }}</h3>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                    @endif
                </div>
                <hr>
                <div class="information-container">
                    <h2>Información Personal</h2>
                    <p><b>Nombre: </b>{{ Auth::user()->name }}</p>
                    <p><b>Apellido: </b>{{ Auth::user()->apellidos }}</p>
                    <p><b>Género: </b> Mujer</p>
                    <p><b>Estado Civil: </b> Andrés</p>
                    <p><b>Nacionalidad: </b> Colombia</p>
                    <p><b>Libreta Militar: </b> Sí</p>
                    <p><b>Fecha de Nacimiento: </b> 20 de Octubre de 1995</p>
                    <p><b>Lugar de Nacimiento: </b> Fusagasugá</p>
                    <p><b>Dirección: </b> Carrera 12312 #123 - 132</p>
                    <p><b>E-mail: </b> linuxdiaz@gmail.com</p>
                </div>
                <hr>
                <div class="information-container">
                    <h2>Idiomas</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Habla</th>
                                <th>Lectura</th>
                                <th>Escritura</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Inglés</td>
                                <td>medio</td>
                                <td>alto</td>
                                <td>bajo</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <hr>
                <div class="information-container">
                    <h2>Información Personal</h2>
                    <p><b>Nombre: </b>{{ Auth::user()->name }}</p>
                    <p><b>Apellido: </b>{{ Auth::user()->apellidos }}</p>
                    <p><b>Género: </b> Mujer</p>
                    <p><b>Estado Civil: </b> Andrés</p>
                    <p><b>Nacionalidad: </b> Colombia</p>
                    <p><b>Libreta Militar: </b> Sí</p>
                    <p><b>Fecha de Nacimiento: </b> 20 de Octubre de 1995</p>
                    <p><b>Lugar de Nacimiento: </b> Fusagasugá</p>
                    <p><b>Dirección: </b> Carrera 12312 #123 - 132</p>
                    <p><b>E-mail: </b> linuxdiaz@gmail.com</p>
                </div>
                <hr>
                <div class="information-container">
                    <h2>Información Personal</h2>
                    <p><b>Nombre: </b>{{ Auth::user()->name }}</p>
                    <p><b>Apellido: </b>{{ Auth::user()->apellidos }}</p>
                    <p><b>Género: </b> Mujer</p>
                    <p><b>Estado Civil: </b> Andrés</p>
                    <p><b>Nacionalidad: </b> Colombia</p>
                    <p><b>Libreta Militar: </b> Sí</p>
                    <p><b>Fecha de Nacimiento: </b> 20 de Octubre de 1995</p>
                    <p><b>Lugar de Nacimiento: </b> Fusagasugá</p>
                    <p><b>Dirección: </b> Carrera 12312 #123 - 132</p>
                    <p><b>E-mail: </b> linuxdiaz@gmail.com</p>
                </div>
                <hr>
                <div class="information-container">
                    <h2>Información Personal</h2>
                    <p><b>Nombre: </b>{{ Auth::user()->name }}</p>
                    <p><b>Apellido: </b>{{ Auth::user()->apellidos }}</p>
                    <p><b>Género: </b> Mujer</p>
                    <p><b>Estado Civil: </b> Andrés</p>
                    <p><b>Nacionalidad: </b> Colombia</p>
                    <p><b>Libreta Militar: </b> Sí</p>
                    <p><b>Fecha de Nacimiento: </b> 20 de Octubre de 1995</p>
                    <p><b>Lugar de Nacimiento: </b> Fusagasugá</p>
                    <p><b>Dirección: </b> Carrera 12312 #123 - 132</p>
                    <p><b>E-mail: </b> linuxdiaz@gmail.com</p>
                </div>
                <hr>
                <div class="information-container">
                    <h2>Información Personal</h2>
                    <p><b>Nombre: </b>{{ Auth::user()->name }}</p>
                    <p><b>Apellido: </b>{{ Auth::user()->apellidos }}</p>
                    <p><b>Género: </b> Mujer</p>
                    <p><b>Estado Civil: </b> Andrés</p>
                    <p><b>Nacionalidad: </b> Colombia</p>
                    <p><b>Libreta Militar: </b> Sí</p>
                    <p><b>Fecha de Nacimiento: </b> 20 de Octubre de 1995</p>
                    <p><b>Lugar de Nacimiento: </b> Fusagasugá</p>
                    <p><b>Dirección: </b> Carrera 12312 #123 - 132</p>
                    <p><b>E-mail: </b> linuxdiaz@gmail.com</p>
                </div>
                <hr>
                <div class="information-container">
                    <h2>Información Personal</h2>
                    <p><b>Nombre: </b>{{ Auth::user()->name }}</p>
                    <p><b>Apellido: </b>{{ Auth::user()->apellidos }}</p>
                    <p><b>Género: </b> Mujer</p>
                    <p><b>Estado Civil: </b> Andrés</p>
                    <p><b>Nacionalidad: </b> Colombia</p>
                    <p><b>Libreta Militar: </b> Sí</p>
                    <p><b>Fecha de Nacimiento: </b> 20 de Octubre de 1995</p>
                    <p><b>Lugar de Nacimiento: </b> Fusagasugá</p>
                    <p><b>Dirección: </b> Carrera 12312 #123 - 132</p>
                    <p><b>E-mail: </b> linuxdiaz@gmail.com</p>
                </div>
            </div>
        </div>
</div>
@endsection
