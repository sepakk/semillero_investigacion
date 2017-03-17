@extends('layouts.admin')


@section('contenido')
<div class="container">
    <div class="divider"></div>
    <h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
    <h2>Universidad de Cundinamarca</h2>
    {!! Form::open(array('url' => 'perfeccionamineto.perfeccionamiento', "class"=>"big-form")) !!}
        <legend>ACTIVIDADES PERFECCIONAMIENTO (DIPLOMADOS-CURSOS)</legend>
        <div class="duplicate">
            <div class="form-group{{ $errors->has('entidad') ? ' has-error' : '' }}">
                {{ Form::label('ENTIDAD', 'Entidad', array('class' => 'form-label col-lg-2')) }}
                <input id="entidad" type="text" class="form-control" name="entidad" placeholder="entidad..." value="" required autofocus>
            </div>
            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                {{ Form::label('nombre', 'Nombre', array('class' => 'form-label col-lg-2')) }}
                <input id="nombre" type="text" class="form-control" name="nombre" placeholder="nombre.." value="" required autofocus>
            </div>
            <div class="form-group{{ $errors->has('fechas') ? ' has-error' : '' }}">
                {{ Form::label('fechas', 'Fechas', array('class' => 'form-label col-lg-2')) }}
                <input id="fechas" type="text" class="form-control" name="fechas" placeholder="fechas.." value="" required autofocus>
            </div>
            <div class="form-group{{ $errors->has('Intensidad') ? ' has-error' : '' }}">
                {{ Form::label('inthoraria', 'Intensidad Horaria', array('class' => 'form-label col-lg-2')) }}
                <input id="Intensidad" type="text" class="form-control" name="Intensidad" placeholder="intensidad.." value="" required autofocus>
            </div>
            <hr>
            <br>
            <br>
        </div>
        <button type="button" id="add-more" name="submit">Agregar otro Perfeccionamiento</button>

        <input type="submit" name="submit" value="Continuar">
    {!! Form::close()  !!}
</div>
@endsection