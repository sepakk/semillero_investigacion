@extends('layouts.admin')

@section('contenido')
	<div class="container">
		<div class="divider"></div>

		<h1>Plataforma de Banco de Hojas de vida</h1>
		<h2>Zona Administrador</h2>
   		
		@foreach($usuarios as $us)
			<a href="usuarios/{{$us->id}}" class="user_container">
				<div class="admin-header">
					<div class="admin-image"></div>            
				</div>

				<div class="admin-contenido">
					<p><b>Nombre: </b>{{$us->name}}</p>
					<p><b>Apellidos: </b>{{$us->apellidos}}</p>
					<p><b>Cedula: </b>{{$us->documento_identificacion}}</p>
					<p><b>Poderacion: </b> 70</p>
				</div>
			</a>
		@endforeach
	</div>
@endsection 