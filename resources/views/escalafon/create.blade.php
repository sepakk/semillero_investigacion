@extends('layouts.admin')

@section('contenido')


	<div class="container">
		<div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
					<div class="divider"></div>

					<h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
					<h2>Universidad de Cundinamarca</h2>

					<form>
					<label for="name">CATEGORIA EN EL ESCALAFON</label>
					<label for="name">Si ha sido escalonado previamente en una Universidad y está ubicado en una de las categorías de las relacionadas a continuación identifíquela y anexe documento de soporte.</label>
			            <select>
			             <option value="">Auxiliar</option>
			             <option value="">Asistente</option>
			             <option value="">Asociado</option>
			             <option value="">Titular </option>
			             </select>
			            <input type="file" name="Archivo">
			            <input type="submit" name="submit" value="Continuar">
			            <input type="submit" name="submit" value="Agregar otro Escalofon">
					</form>	
				</div>
			</div>
	    </div>
	</div>

@endsection