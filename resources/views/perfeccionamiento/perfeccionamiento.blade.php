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
$(document).ready(function(){
        $('.btn-danger').click(function(){

                //we select the box clone it and insert it after the box
                $('.row:last').remove()
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
 <div class="row test">
	 	<div class="col-md-2">
	 		{{ Form::text('ENTIDAD', 'Entidad...', array('class' => 'field')) }}
	 	</div>
 	<div class="col-md-2">
 	{{ Form::text('nombre', 'Nombre...', array('class' => 'field')) }}
 	</div>
 	<div class="col-md-2">
 	{{ Form::text('fechas', 'Fechas...', array('class' => 'field')) }}
 	</div>
 	<div class="col-md-2">
 	{{ Form::text('inthoraria', 'Intensidad Horaria...', array('class' => 'field')) }}
 	</div>
 </div>
 	
 	</div>
 	<div class="col-md-10">
 	{{ Form::submit('Continuar', array('class' => 'btn')) }}
 	<input type="button" value="+ Agregar cuenta" class="btn-link" />
 	<input type="button" value="+ eliminar" class="btn-danger" />
 </div>
</div>
{!! Form::close()  !!}
</div>
</div>
</div>
@endsection