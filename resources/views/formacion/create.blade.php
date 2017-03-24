@extends('layouts.admin')

@section('contenido')


	<div class="container">
		<div class="divider"></div>
		<h1>Agregue su información de Formación Académica</h1>
		<h2>Universidad de Cundinamarca</h2>

		{!!Form::open(array('url'=>'formacion','method'=>'POST','autocomplete'=>'off','class'=>'big-form'))!!}
	    {{Form::token()}}
	    	<div class="duplicate">
				<label for="name">Formacion Academica</label>

				<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
					<input type="text" class="form-control" placeholder= "Nombre de Carrera... " name="nombre[]">
				</div>
				<div class="form-group{{ $errors->has('Institucion') ? ' has-error' : '' }}">
					<input type="text" class="form-control" placeholder="Institución..." name="institucion[]">
				</div>

				<div class="col-70 form-group{{ $errors->has('nivel') ? ' has-error' : '' }}">
					<label for="select_nivel" class="form-label col-lg-2" >Nivel</label>
					<select class="form-control" name="nivel[]" id="select_nivel">
						@foreach($niveles as $nivel)
							<option value="{{$nivel->cod_nivel}}">{{$nivel->nombre_nivel}}</option>
						@endforeach
					</select>
				</div>
				<div class="col-70 form-group{{ $errors->has('modalidad') ? ' has-error' : '' }}">
					<label for="select_modalidad" class="form-label col-lg-2" >Modalidad</label>
					<select class="form-control" name="modalidad[]" id="select_modalidad">
						@foreach($modalidades as $modalidad)
							<option value="{{$modalidad->cod_modalidad}}">{{$modalidad->nombre_modalidad}}</option>
						@endforeach
					</select>
				</div>


				<div class="col-70 form-group{{ $errors->has('semestres') ? ' has-error' : '' }}">
					<label for="select_modalidad" class="form-label col-lg-2" >N° de Semestres:</label>
					<input class="form-control" type="number" name="semestres[]">
				</div>

				<div class="col-70 form-group{{ $errors->has('graduado') ? ' has-error' : '' }}">
					<br>
					<label for="graduado" class="form-label" >¿Estás Graduado?</label>
					<input id="graduado" type="checkbox" class="form-control" name="graduado[]" value="si">
				</div>

	            <div class="form-group{{ $errors->has('Titulo') ? ' has-error' : '' }}">
					<input type="text" class="form-control graduado-hide hidden" placeholder="Titulo..." name="titulo[]">
				</div>
				<div class="form-group{{ $errors->has('Tarjeta') ? ' has-error' : '' }}">
					<input type="text" class="form-control graduado-hide hidden" placeholder="Tarjeta Profesional..." name="tarjeta[]">
	            </div>
	            <div class="col-70 form-group{{ $errors->has('Titulo') ? ' has-error' : '' }} graduado-hide hidden">
					<label for="input_fecha" class="form-label col-lg-2">Fecha: </label>
					<input class="form-control" id="input_fecha" type="date" name="fecha[]">
				</div>
	            <label class=" graduado-hide hidden">Certificado</label>
				<input type="file" name="certificado[]" class="graduado-hide hidden">

				<hr>
				<br><br>
			</div>

     		 <button type="button" id="add-more" name="submit">Agregar otra Formación</button>
			<input type="submit" name="submit" value="Continuar">


		{!!Form::close()!!}		
			
	</div>
@endsection

@section('js')

@endsection