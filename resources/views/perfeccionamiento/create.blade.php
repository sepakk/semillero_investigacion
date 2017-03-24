@extends('layouts.admin')


@section('contenido')
<div class="container">
    <div class="divider"></div>
    <h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
    <h2>Universidad de Cundinamarca</h2>
    {!! Form::open(array('url' => 'perfeccionamineto.perfeccionamiento', "class"=>"big-form")) !!}
    <label for="name">Actividaddes de Perfeccionamiento (Diplomados-Cursos)</label>
    <br><br>
        <div class="duplicate">
            
            <div class="form-group{{ $errors->has('entidad') ? ' has-error' : '' }}">
                {{ Form::label('ENTIDAD', 'Entidad', array('class' => 'form-label col-lg-2')) }}
                <input id="entidad" type="text" class="form-control" name="entidad" placeholder="entidad..." value="" required autofocus>
            </div>

            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                {{ Form::label('nombre', 'Nombre', array('class' => 'form-label col-lg-2')) }}
                <input id="nombre" type="text" class="form-control" name="nombre" placeholder="nombre.." value="" >
            </div>

            <div class="form-group{{ $errors->has('Intensidad') ? ' has-error' : '' }}">
                {{ Form::label('inthoraria', 'Intensidad Horaria', array('class' => 'form-label col-lg-2')) }}
                <input id="Intensidad" type="text" class="form-control" name="Intensidad" placeholder="intensidad.." value="">
            </div>

            <div class="form-group{{ $errors->has('Puntaje') ? ' has-error' : '' }}">
                {{ Form::label('punt', 'Puntaje', array('class' => 'form-label col-lg-2')) }}
                <input id="Puntaje" type="number" class="form-control" name="Puntaje" placeholder="Puntaje.." value="">
            </div>

            <div class="form-group{{ $errors->has('fecha-inicio') ? ' has-error' : '' }}">
                {{ Form::label('fechas', 'Fecha de Inicio', array('class' => 'form-label col-lg-2')) }}
                <input id="fecha-inicio" type="date" class="form-control" name="fecha-inicio">
            </div>

            <div class="form-group{{ $errors->has('fecha-final') ? ' has-error' : '' }}">
                {{ Form::label('fechas', 'Fecha de Terminacion', array('class' => 'form-label col-lg-2')) }}
                <input id="fecha-final" type="date" class="form-control" name="fecha-final">
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