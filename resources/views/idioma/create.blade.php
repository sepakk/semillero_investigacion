@extends('layouts.admin')

@section('contenido')
	<div class="container">
		<div class="divider"></div>

		<h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
		<h2>Universidad de Cundinamarca</h2>

            {!!Form::open(array('url'=>'idioma','method'=>'POST','autocomplete'=>'off','class'=>'big-form'))!!}
                  <div class="duplicate">
                        <label for="name">Especifique los idiomas diferentes al español que:</label>

                        <div class="form-group{{ $errors->has('cod_idioma') ? ' has-error' : '' }}">
                              <label class="form-label col-lg-2" for="cod_idioma[]">Idioma</label>
                              <select name="cod_idioma[]" class="form-control">
                                    @foreach($idiomas as  $idm)
                                          <option value="{{$idm->cod_idioma}}">{{$idm->nombre_idioma}}</option>
                                    @endforeach
                              </select>
                        </div>
                        <div class="contenedor-lugar">
                              <div class="form-group{{ $errors->has('habla') ? ' has-error' : '' }}">
                                    <label class="form-label" for="habla">Lo Habla:</label>
                                    <select name="habla[]" class="form-control">
                                          <option value="0">Regular</option>
                                          <option value="1">Bien</option>
                                          <option value="2">Muy bien</option>
                                    </select>
                              </div>

                              <div class="form-group{{ $errors->has('lectura') ? ' has-error' : '' }}">
                                    <label class="form-label" for="lectura">Lo Lee:</label>
                                    <select name="lectura[]" class="form-control">
                                          <option value="0">Regular</option>
                                          <option value="1">Bien</option>
                                          <option value="2">Muy bien</option>
                                    </select>
                              </div>

                              <div class="form-group{{ $errors->has('escritura') ? ' has-error' : '' }}">
                                    <label class="form-label" for="escritura">Lo Escribe:</label>
                                    <select name="escritura[]" class="form-control">
                                          <option value="0">Regular</option>
                                          <option value="1">Bien</option>
                                          <option value="2">Muy bien</option>
                                    </select>
                              </div>
                        </div>
                  <hr>
                  <br>
                  </div>
                  <button type="button" id="add-more" name="submit">Agregar otro Idioma</button>

                  <input type="submit" name="submit" value="Continuar">

            {!!Form::close()!!}   
	</div>

@endsection
