@extends('layouts.admin')

@section('contenido')



	<div class="container">
		<div class="divider"></div>

		<h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
		<h2>Universidad de Cundinamarca</h2>

            {!!Form::model(null,['method'=>'PUT','route'=>['idioma.store'],'files'=>true, 'class'=>'big-form'])!!}
                  <div class="duplicate">
                        <label for="name">Especifique los idiomas diferentes al español que:</label>

                        <div class="contenedor-lugar form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                              <label for="name">IDIOMA:</label>
                              <select name="name">
                                    @foreach($idiomas as  $idm)
                                          <option value="{{$idm->cod_idioma}}">{{$idm->nombre_idioma}}</option>
                                    @endforeach
                              </select>
                        </div>

                        <div class="contenedor-lugar form-group{{ $errors->has('habla') ? ' has-error' : '' }}">
                              <label for="habla">Lo Habla:</label>
                              <select name="habla">
                                    <option value="0">Regular</option>
                                    <option value="1">Bien</option>
                                    <option value="2">Muy bien</option>
                              </select>
                        </div>

                        <div class="contenedor-lugar form-group{{ $errors->has('lee') ? ' has-error' : '' }}">
                              <label for="lee">Lo Lee:</label>
                              <select name="lee">
                                    <option value="0">Regular</option>
                                    <option value="1">Bien</option>
                                    <option value="2">Muy bien</option>
                              </select>
                        </div>

                        <div class="contenedor-lugar form-group{{ $errors->has('escribe') ? ' has-error' : '' }}">
                              <label for="escribe">Lo Escribe:</label>
                              <select name="lee">
                                    <option value="0">Regular</option>
                                    <option value="1">Bien</option>
                                    <option value="2">Muy bien</option>
                              </select>
                        </div>
                  <hr>
                  <br>
                  <br>
                  </div>

                  <button type="button" id="add-more" name="submit">Agregar otro Idioma</button>

                  <input type="submit" name="submit" value="Continuar">

            {!!Form::close()!!}	
	</div>

@endsection
