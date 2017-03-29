@extends('layouts.admin')

@section('contenido')

  <div class="container">
    <div class="divider"></div>

      <h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
      <h2>Universidad de Cundinamarca</h2>

      {!!Form::model(null,['method'=>'POST','route'=>['produccion.store'],'files'=>true, 'class'=>'big-form'])!!}
        {{Form::token()}}
        <div class="duplicate">
          <label for="name">PRODUCTIVIDAD ACADEMICA </label>
          <div class="form-group{{ $errors->has('especializacion') ? ' has-error' : '' }}">
            <label for="select_Especializaciones" class="form-label col-lg-2" >Producción</label>
            <select class="form-control" id="select_Especializaciones" name="especializacion[]">
              @foreach($producciones as $produccion)
                <option value="{{$produccion->cod_produccion}}">{{$produccion->nombre_produccion}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
            <label for="select_Tipo" class="form-label col-lg-2">Categoria</label>
            <select class="form-control" id="select_Tipo" name="tipo[]">
              <option value="1"> En revistas tipo A1 </option>
              <option value="2"> En routevistas tipo A2 </option>
              <option value="3"> En revistas tipo B </option>
              <option value="4"> En revistas tipo C </option>
            </select>
          </div>

          <div class="form-group{{ $errors->has('archivo') ? ' has-error' : '' }}">
            <label type="name" class="form-label col-lg-2" >Certificado</label>
            <input class="form-control" type="file" name="archivo[]">
          </div>

          <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
            <label for="date"  class="form-label col-lg-2" >Fecha</label>
            <input class="form-control" id="date" type="date" name="fecha[]">
          </div>

          <hr>
          <br>
          <br>
        </div>

        <div class="form-group{{ $errors->has('submit') ? ' has-error' : '' }}">
          <button type="button" id="add-more" name="submit">Agregar otra Productividad</button>
          <input type="submit" name="submit" value="Continuar">
        </div>

    {!!Form::close()!!} 
  </div>
@endsection