@extends('layouts.admin')

@section('contenido')
	<div class="container" style="position: relative;">
		<div class="divider"></div>


        <a class="button-back" style="right: 0; position: absolute; margin: 10px;" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">Salir
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
         </form></a>

		<h1>Plataforma de Banco de Hojas de vida</h1>
		<h2>Zona Administrador</h2>
   		@include('admin.search')
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
		<div style="margin: 0 auto;">
            <?php echo  $usuarios->render(); ?>
        	<p style="text-align: center"> Pagina {{$usuarios->currentPage()}} de {{$usuarios->lastPage()}}</p>
        </div>
		
	</div>
@endsection 