<ul>
                <li>
                    <a href="/home">Inicio</a>
                </li>
                
                <li>
                    <a href="/informacion">Información Personal</a>
                </li>
                @if($usuario->tipoUsuario!=1)
                <li>
                    <a href="/idioma">Idiomas</a>
                </li>

                <li>
                    <a href="">Perfeccionamiento</a>
                </li>

                <li>
                    <a href="">Formación Académica</a>
                </li>

                <li>
                    <a href="/escalafon">Escalafón</a>
                </li>

                <li>
                    <a href="/experiencia">Experiencia Laboral</a>
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