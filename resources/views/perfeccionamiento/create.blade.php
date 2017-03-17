@extends('layouts.admin')


@section('contenido')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
 <script type = "text/javascript">
$(document).ready(function() {

            $('.btn-link').click(function(){

                //we select the box clone it and insert it after the box
                $('.row:last').clone().insertAfter(".row:last");
            });
        }); 
</script>
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
                    <h2>Perfeccionamiento</h2>
                    {!! Form::open(array('url' => 'perfeccionamineto.perfeccionamiento')) !!}
 	                  <legend>ACTIVIDADES PERFECCIONAMIENTO (DIPLOMADOS-CURSOS)</legend>
                     <div class="duplicate">
                    	 	<div class="contenedor-lugar form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    	 		{{ Form::label('ENTIDAD', 'Entidad', array('class' => 'field')) }}
                            <input id="entidad" type="text" class="form-control" name="entidad" placeholder="entidad..." value="" required autofocus>
                    	 	</div>
                         	<div class="contenedor-lugar form-group{{ $errors->has('habla') ? ' has-error' : '' }}">
                         	{{ Form::label('nombre', 'Nombre', array('class' => 'field')) }}
                            <input id="nombre" type="text" class="form-control" name="nombre" placeholder="nombre.." value="" required autofocus>
                         	</div>
                         	<div class="contenedor-lugar form-group{{ $errors->has('habla') ? ' has-error' : '' }}">
                         	{{ Form::label('fechas', 'Fechas...', array('class' => 'field')) }}
                            <input id="fechas" type="text" class="form-control" name="fechas" placeholder="fechas.." value="" required autofocus>
                         	</div>
                         	<div class="contenedor-lugar form-group{{ $errors->has('habla') ? ' has-error' : '' }}">
                         	{{ Form::label('inthoraria', 'Intensidad Horaria...', array('class' => 'field')) }}
                            <input id="Intensidad" type="text" class="form-control" name="Intensidad" placeholder="intensidad.." value="" required autofocus>
                         	</div>
                     </div>
                </div>
                <hr>
                  <br>
                  <br>
                <input type="button" value="+ Agregar cuenta" class="btn-link" />
                 	{{ Form::submit('Continuar', array('class' => 'btn')) }}
                 	
                 	
                </div>
            </div>
                {!! Form::close()  !!}
            </div>
@endsection