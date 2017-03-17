@extends('layouts.admin')

@section('contenido')
	<div class="container">
		<div class="divider"></div>

		<h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
		<h2>Universidad de Cundinamarca</h2>

            {!!Form::open(array('url'=>'idioma','method'=>'POST','autocomplete'=>'off','class'=>'big-form'))!!}
                  <div class="duplicate">
                        <label for="name">Especifique los idiomas diferentes al español que:</label>

                        <div class="contenedor-lugar form-group{{ $errors->has('cod_idioma') ? ' has-error' : '' }}">
                              <label for="cod_idioma">IDIOMA:</label>
                              <select name="cod_idioma[]">
                                    @foreach($idiomas as  $idm)
                                          <option value="{{$idm->cod_idioma}}">{{$idm->nombre_idioma}}</option>
                                    @endforeach
                              </select>
                        </div>

                        <div class="contenedor-lugar form-group{{ $errors->has('habla') ? ' has-error' : '' }}">
                              <label for="habla">Lo Habla:</label>
                              <select name="habla[]">
                                    <option value="0">Regular</option>
                                    <option value="1">Bien</option>
                                    <option value="2">Muy bien</option>
                              </select>
                        </div>

                        <div class="contenedor-lugar form-group{{ $errors->has('lectura') ? ' has-error' : '' }}">
                              <label for="lectura">Lo Lee:</label>
                              <select name="lectura[]">
                                    <option value="0">Regular</option>
                                    <option value="1">Bien</option>
                                    <option value="2">Muy bien</option>
                              </select>
                        </div>

                        <div class="contenedor-lugar form-group{{ $errors->has('escritura') ? ' has-error' : '' }}">
                              <label for="escritura">Lo Escribe:</label>
                              <select name="escritura[]">
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
