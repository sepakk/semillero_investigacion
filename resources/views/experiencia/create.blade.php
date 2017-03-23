@extends('layouts.admin') @section('contenido')


<div class="container">
    <div class="divider"></div>

    <h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
    <h2>Universidad de Cundinamarca</h2>

    {!!Form::model(null,['method'=>'POST','route'=>['experiencia.store'],'files'=>true, 'class'=>'big-form'])!!} {{Form::token()}}
    <div class="duplicate">
        <label for="name">Experiencia Calificada</label>

        <div class="form-group{{ $errors->has('Cargos') ? ' has-error' : '' }}">
            <div class="contenedor-lugar">
                <label for="select_cargos">Cargos:</label>
                <select class="form-control" id="select_cargos" name="Cargos">
			                   <option value="1">Investigación</option>
			                   <option value="2">Docencia universitaria</option>
			                   <option value="3">En cargos de dirección académica</option>
			                   <option value="4">Experiencia profesional diferente a la docente</option>
			                   <option value="5">Experiencia en extensión</option>
			             </select>
            </div>
        </div>

        <div class="form-group{{ $errors->has('Entidad') ? ' has-error' : '' }}">
            <input class="form-control" type="text" placeholder="Entidad" name="Entidad">
        </div>

        <div class="form-group{{ $errors->has('Dirección') ? ' has-error' : '' }}">
            <input class="form-control" type="text" placeholder="Dirección" name="Dirección">
        </div>

        <div class="contenedor-lugar">
            <div class="contenedor-select">
                <div class="form-group{{ $errors->has('Pais') ? ' has-error' : '' }} ">
                    <label for="país">Pais</label>
                    <select class="form-control" id="país" name="país">
                    @foreach($paises as $pais)
				        <option value="{{$pais->cod_pais}}">{{$pais->nombre_pais}}</option>
				    @endforeach
				             </select>
                </div>
            </div>


            <div class="contenedor-select">
                <div class="form-group{{ $errors->has('Departamento') ? ' has-error' : '' }}">
                    <label for="departamento" id="ndepto" class="hidden">Departamento</label>
                    <select class="form-control hidden" id="departamento" name="departamento">
                    <option value="">Seleccione Departamento</option>
                    @foreach($departamentos as $depto)
                        <option value="{{$depto->cod_departamento}}">{{$depto->nombre_departamento}}</option>
                    @endforeach
				    </select>
                </div>
            </div>


            <div class="contenedor-select">
                <div class="form-group{{ $errors->has('Ciudad') ? ' has-error' : '' }}">
                    <label for="ciudad" id="nciudad" class="hidden">Ciudad</label>
                    <select class="form-control hidden" id="ciudad" name="ciudad">
					             </select>
                </div>
            </div>
        </div>


        <div class="form-group{{ $errors->has('Telefono') ? ' has-error' : '' }}">
            <input class="form-control" type="number" placeholder="Telefono" name="Telefono">
        </div>

        <div class="form-group{{ $errors->has('Correo') ? ' has-error' : '' }}">
            <input class="form-control" type="email" placeholder="Correo..." name="Correo">
        </div>


        <div class="form-group{{ $errors->has('Tipo') ? ' has-error' : '' }}">
            <div class="contenedor-lugar">
                <label for="name">Tipo:</label>
                <select class="form-control" id="select_Tipo" name="Tipo">
							<option value="1">Publica</option>
							<option value="2">Privada</option>
						</select>
            </div>
        </div>

        <div class="form-group{{ $errors->has('Fecha_i') ? ' has-error' : '' }}">
            <label>Fecha De Ingreso</label>
            <input class="form-control" type="date" name="Fecha_i">
        </div>

        <div class="form-group{{ $errors->has('Fecha_r') ? ' has-error' : '' }}">
            <label>Fecha De Retiro</label>
            <input class="form-control" type="date" name="Fecha_r">
        </div>

        <div class="form-group{{ $errors->has('Archivo') ? ' has-error' : '' }}">
            <label type="name">Certificado</label>
            <input class="form-control" type="file" name="Archivo">
        </div>
        <hr>
        <br>
        <br>
    </div>
    <div class="form-group{{ $errors->has('submit') ? ' has-error' : '' }}">
        <button type="button" id="add-more" name="submit">Agregar otra Experiencia</button>
        <input type="submit" name="submit" value="Continuar">
    </div>


    {!!Form::close()!!}
</div>

@endsection
