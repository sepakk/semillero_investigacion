@extends('layouts.admin')

@section('contenido')



	<div class="container">
		<div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
					<div class="divider"></div>

					<h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
					<h2>Universidad de Cundinamarca</h2>

					{!!Form::open(array('url'=>'escalafones','method'=>'POST','autocomplete'=>'off','files'=>true, 'class'=>'big-form'))!!}
						{{Form::token()}}
						<div class="duplicate">
							<label for="name">CATEGORIA EN EL ESCALAFON</label>
							<label for="name">Si ha sido escalonado previamente en una Universidad y está ubicado en una de las categorías de las relacionadas a continuación identifíquela y anexe documento de soporte.</label>

							<div class="form-group{{ $errors->has('tipo_escalafon') ? ' has-error' : '' }}">
								<div class="contenedor-lugar">
									<label for="tipo_escalafon" >Tipo:</label>
									<select id="tipo_escalafon" name="tipo_escalafon">
										@foreach($tipos as $tipo)
											<option value="{{$tipo->cod_escalafon}}">{{$tipo->nombre_escalafon}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group{{ $errors->has('anexo') ? ' has-error' : '' }}">
								<div class="contenedor-lugar">
									<label for="select_cargos" >Certificado:</label>
									<input type="file" name="anexo" id="anexo">
									<input type="text" name="documento_identificacion" id="documento_identificacion" value="{{$documento_identificacion}}" class="hidden">
								</div>
							</div>
							<hr>
							<br><br>
						</div>
						<button type="button" id="add-more" name="submit">Agregar otro Escalafon</button>
						
						<div class="form-group{{ $errors->has('enviar') ? ' has-error' : '' }}">
							<input type="submit" name="submit" value="Continuar">
						</div>
					{!!Form::close()!!}
				</div>
			</div>
	    </div>
	</div>

@endsection