@extends('layouts.admin')

@section('contenido')


	<div class="container">
		<div class="divider"></div>
		<div class="row">
        	<div class="col-md-8 col-md-offset-2">
            	<div class="panel panel-default">
					<h1>Agregue su informaci{on de Formación Académica</h1>
					<h2>Universidad de Cundinamarca</h2>

					{!!Form::model(null,['method'=>'PUT','route'=>['formacion.store'],'files'=>true, 'class'=>'big-form'])!!}
				    {{Form::token()}}
				    	<div class="duplicate">
							<label for="name">Formacion Academica</label>

							<input type="text" class="form-control" placeholder= "Nombre... " name="">

							<input type="text" class="form-control" placeholder="Institucion..." name="Institucion">

							<div class="contenedor-lugar">
								<label for="select_nivel" >Nivel:</label>
								<select class="form-control" id="select_nivel">
									<option value=""></option>
								</select>
							</div>
							<div class="contenedor-lugar">
								<label for="select_modalidad" >Modalidad:</label>
								<select class="form-control" id="select_modalidad">
									<option value=""></option>
								</select>
							</div>


							<div class="contenedor-lugar">
								<label for="select_modalidad" >N° de Semestres:</label>
								<input class="form-control" type="number" name="">
							</div>

							<label>¿Está Graduado?</label>
						    <input id="graduado" type="checkbox" class="form-control" name="graduado" value="{{ old('graduado') }}">

				            <input type="text" class="form-control hidden" placeholder="Titulo..." name="Titulo">
							<input type="text" class="form-control hidden" placeholder="Tarjeta Profecional..." name="Tarjeta">
				            <div class="contenedor-lugar hidden">
								<label for="input_fecha">Fecha: </label>
								<input class="form-control" id="input_fecha" type="date" name="Fecha">
							</div>
				            <label class="hidden">Certificado</label>
							<input type="file" name="certificado" class="hidden">

							<hr>
							<br><br>
						</div>

                 		 <button type="button" id="add-more" name="submit">Agregar otra Formación</button>
						<input type="submit" name="submit" value="Continuar">


					{!!Form::close()!!}		
			</div>
		</div>
	</div>
	</div>
@endsection

@section('js')
	
	<script type="text/javascript">
		$( document ).ready(function() {
			$("#add-more").click(function(){
	 			$('#graduado').click(function() {
				    //$("#txtAge").toggle(this.checked);
				    if($(this).is(':checked')){
						$(this).next().removeClass('hidden');
						$(this).next().next().removeClass('hidden');
						$(this).next().next().next().removeClass('hidden');
						$(this).next().next().next().next().removeClass('hidden');
						$(this).next().next().next().next().next().removeClass('hidden');
					}
					else{
						$(this).next().addClass('hidden');
						$(this).next().next().addClass('hidden');
						$(this).next().next().next().addClass('hidden');
						$(this).next().next().next().next().addClass('hidden');
						$(this).next().next().next().next().next().addClass('hidden');
					
					}
				});
		 	});
		 });
	</script>
@endsection