@extends('layouts.admin')

@section('contenido')



	<div class="container">
		<div class="divider"></div>

		<h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
		<h2>Universidad de Cundinamarca</h2>

		<form>
		    <label for="name">Especifique los idiomas diferentes al español que:</label>
			<label for="name">IDIOMA</label>
			<select>
			@foreach($idioma as  $idm)
             <option value="{{$idm->cod_idioma}}">{{$idm->nombre_idioma}}</option>
            @endforeach
             </select>
		    <label for="name">Lo Habla</label>
				
             <select>
             <option value="Regular">Regular</option>
             <option value="Bien">Bien</option>
             <option value="Muy bien">Muy bien</option>
             </select>
             <label for="name">Lo Lee</label>
             <select>
             <option value="Regular">Regular</option>
             <option value="Bien">Bien</option>
             <option value="Muy bien">Muy bien</option>
             </select>
             <label for="name">Lo Escribe</label>
             <select>
             <option value="Regular">Regular</option>
             <option value="Bien">Bien</option>
             <option value="Muy bien">Muy bien</option>
             </select>
             <input type="submit" name="submit" value="Agregar otro Idioma">
             <input type="submit" name="submit" value="Continuar">
		</form>	
	</div>

@endsection
