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
						<label for="name">Formacion Academica</label>

						<input type="text" class="form-control" placeholder= "Nombre... " name="">

						<input type="text" class="form-control" placeholder="Institucion..." name="Institucion">

						<input type="text" class="form-control" placeholder="Tarjeta Profecional..." name="Tarjeta">

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
					    <input id="graduado" type="checkbox" class="form-control" name="graduado" value="{{ old('graduado') }}" autofocus>
			            <input type="text" placeholder="Titulo" name="Titulo">
			            <div class="contenedor-lugar">
							<label for="input_fecha">Fecha: </label>
							<input id="input_fecha" type="date" name="Fecha">
						</div>
			            <label>Certificado</label>
						<input type="file" name="">
						<input type="submit" name="submit" value="Agregar Otra Formacion">


					{!!Form::close()!!}		
			</div>
		</div>
	</div>
	</div>
@endsection
