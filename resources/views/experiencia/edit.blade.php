@extends('layouts.admin')

@section('contenido')

	<div class="container">
		<div class="divider"></div>

		<h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
		<h2>Universidad de Cundinamarca</h2>

		<form>
			<label for="name">Experiencia Calificada</label>

			<div class="contenedor-lugar">
				 <label for="select_cargos" >Cargos:</label>
				 <select id="select_cargos">
	                   <option value="">Investigación</option>
	                   <option value="">Docencia universitaria</option>
	                   <option value="">En cargos de dirección académica</option>
	                   <option value="">Experiencia profesional diferente a la docente</option>
	                   <option value="">Experiencia en extensión</option>
	             </select>
             </div>
			 <input type="text" placeholder="Entidad" name="Entidad">
			 <input type="text" placeholder="Dirección" name="Dirección">

			 <div class="contenedor-lugar">
			 	<div class="contenedor-select">
					 <label for="name">Pais</label>
					 <select>
		                   <option value=""></option>
		                   <option value=""></option>
		             </select>
	             </div>
	             <div class="contenedor-select">
					 <label for="name">Departamento</label>
					 <select id="select-departamento">
		                   <option value=""></option>
		                   <option value=""></option>
		             </select>
	            </div>
	            <div class="contenedor-select">
					<label for="name">Cuidad</label>
					 <select>
		                   <option value=""></option>
		                   <option value=""></option>
		             </select>
	             </div>
	             
	         </div>

             <input type="text" placeholder="Telefono" name="Telefono">
		 	 <input type="email" placeholder="Correo..." name="Correo">
		 	 <div class="contenedor-lugar">
				<label for="name">Tipo:</label>
				<select>
					<option value="">Publica</option>
					<option value="">Privada</option>
				</select>
	         </div>
             <label>Fecha De Ingreso</label>
             <input type="date" name="">
             <label>Fecha De Retiro</label>
             <input type="date" name="">
             <label for="name">Certificado</label>
             <input type="file" name="Archivo">
			 <input type="submit" name="submit" value="Agregar Otra Experiencia">
			 <input type="submit" name="submit" value="Continuar">
		</form>	
	</div>

@endsection