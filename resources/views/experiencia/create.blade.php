@extends('layouts.admin')

@section('contenido')


	<div class="container">
		<div class="divider"></div>

		<h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
		<h2>Universidad de Cundinamarca</h2>

		{!!Form::model(null,['method'=>'PUT','route'=>['experiencia.store'],'files'=>true, 'class'=>'big-form'])!!}
	    {{Form::token()}}
			<label for="name">Experiencia Calificada</label>
            <div class="form-group{{ $errors->has('Cargos') ? ' has-error' : '' }}">

				<div class="contenedor-lugar">
					 <label for="select_cargos" >Cargos:</label>
					 <select id="select_cargos" name="Cargos">
		                   <option value="">Investigación</option>
		                   <option value="">Docencia universitaria</option>
		                   <option value="">En cargos de dirección académica</option>
		                   <option value="">Experiencia profesional diferente a la docente</option>
		                   <option value="">Experiencia en extensión</option>
		             </select>
	             </div>
	         </div>

	         <div class="form-group{{ $errors->has('Entidad') ? ' has-error' : '' }}">
				 <input type="text" placeholder="Entidad" name="Entidad">
			 </div>

             <div class="form-group{{ $errors->has('Dirección') ? ' has-error' : '' }}">
				 <input type="text" placeholder="Dirección" name="Dirección">
             </div>

             <div class="contenedor-lugar">
				 <div class="contenedor-select">
					<div class="form-group{{ $errors->has('Pais') ? ' has-error' : '' }}">
				 		 <label for="select_pais">Pais</label>
						 <select id="select_pais" name="Pais">
			                   <option value=""></option> 
			                   <option value=""></option>
			                   <option></option>
			             </select>
		             </div>
	             </div> 


	             <div class="contenedor-select">
						<div class="form-group{{ $errors->has('Departamento') ? ' has-error' : '' }}">
						 	 <label for="select_departamento">Departamento</label>
							 <select id="select-departamento" name="Departamento">
				                   <option value=""></option>
				                   <option value=""></option>
				             </select>
			            </div>
	            </div>


	            <div class="contenedor-select">
						<div class="form-group{{ $errors->has('Ciudad') ? ' has-error' : '' }}">
						 	<label for="select_ciudad">Ciudad</label>
							 <select id="select_ciudad" name="Ciudad">
				                   <option value=""></option>
				                   <option value=""></option>
				             </select>
			             </div>
	             </div>
			</div>            


             <div class="form-group{{ $errors->has('Telefono') ? ' has-error' : '' }}">
            	 <input type="text" placeholder="Telefono" name="Telefono">
             </div>

             <div class="form-group{{ $errors->has('Correo') ? ' has-error' : '' }}">
		 		 <input type="email" placeholder="Correo..." name="Correo">
             </div>

             
             <div class="form-group{{ $errors->has('Tipo') ? ' has-error' : '' }}">
			 	 <div class="contenedor-lugar">
					<label for="name">Tipo:</label>
					<select id="select_Tipo" name="Tipo">
						<option value="">Publica</option>
						<option value="">Privada</option>
					</select>
		         </div>
	         </div>

             <div class="form-group{{ $errors->has('Fecha_i') ? ' has-error' : '' }}">
	             <label>Fecha De Ingreso</label>
	             <input type="date" name="Fecha_i">
             </div>
             
             <div class="form-group{{ $errors->has('Fecha_r') ? ' has-error' : '' }}">
	             <label>Fecha De Retiro</label>
	             <input type="date" name="Fecha_r">
             </div>

             <div class="form-group{{ $errors->has('Archivo') ? ' has-error' : '' }}">
		         <label type="name">Certificado</label>
		         <input type="file" name="Archivo">
             </div>
             
             <div class="form-group{{ $errors->has('submit') ? ' has-error' : '' }}">
				 <input type="submit" name="submit" value="Agregar Otra Experiencia">
				 <input type="submit" name="submit" value="Continuar">
			 </div>


		{!!Form::close()!!}	
	</div>

@endsection
