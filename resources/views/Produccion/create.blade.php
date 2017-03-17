@extends('layouts.admin')

@section('contenido')

	  <div class="container">
		<div class="divider"></div>

		<h1>Bienvenido a La Plataforma de Banco de Hojas de vida</h1>
		<h2>Universidad de Cundinamarca</h2>

		{!!Form::model(null,['method'=>'PUT','route'=>['productividad.store'],'files'=>true, 'class'=>'big-form'])!!}
    {{Form::token()}}
		 <label for="name">PRODUCTIVIDAD ACADEMICA </label>
     <div class="form-group{{ $errors->has('Especializaciones') ? ' has-error' : '' }}">
          <div class="contenedor-lugar">
             <label for="select_Especializaciones" >Especiliaciones:</label>
             <select class="form-control" id="select_Especializaciones" name="Especiliaciones">
                   <option value="">ARTICULOS</option>
                   <option value="">COMUNICACIÓN CORTA (SHORT COMUNICATION)</option>
                   <option value="">INFORMES DE CASO, REVISIONES DE TEMA,CARTAS AL EDITOR O EDITORIALES</option>
                   <option value="">VIDEOS</option>
                   <option value="">FOTOGRAFÍA </option>
                   <option value="">LIBROS</option>
                   <option value="">TRADUCCIÓN</option>
                   <option value="">PREMIOS</option>
                   <option value="">PATENTES</option>
                   <option value="">OBRAS ARTISTICAS</option>
                   <option value="">PRODUCCIÓNTÉCNICAPRODUCCIÓN DE SOFTWARE</option>
                   <option value="">PRODUCCIÓN DE VIDEOS, CINEMATOGRÁFICA O FONOGRÁFICA</option>
                   <option value="">OBRAS ARTÍSTICAS</option>
                   <option value="">PONENCIAS</option>
                   <option value="">PUBLICACIONES</option>
                   <option value="">ARTICULOS REVISTAS NO INDEXADAS</option>
                   <option value="">ESTUDIOS</option>
                   <option value="">TRADUCCIONES PUBLICADAS</option>
                   <option value="">DIRECCIONES DE TESIS </option>
                   </select>
                 </div>
             </div>
             
             <label for="name">Tipo</label>
             <div class="form-group{{ $errors->has('Tipo') ? ' has-error' : '' }}">
             <div class="contenedor-lugar">
             <label for="select_Tipo" >Tipo</label>
             <select class="form-control" id="select_Tipo" name="Tipo">
                         <option value="">En revistas tipo A1</option>
                         <option value="">En revistas tipo A2</option>
                         <option value="">En revistas tipo B</option>
                         <option value="">En revistas tipo C</option>
                         <option value="">En revistas tipo A1</option>
                         <option value="">En revistas tipo A2</option>
                         <option value="">En revistas tipo B</option>
                         <option value="">En revistas tipo C</option>
                         <option value="">En revistas tipo A1</option>
                         <option value="">En revistas tipo A2</option>
                         <option value="">En revistas tipo B</option>
                         <option value="">En revistas tipo C</option>
                         <option value="">Difusión e impacto internacional</option>
                         <option value="">Difusión e impacto nacional</option>
                         <option value="">Que resulten de un labor investigativa – Divulgación Internacional</option>
                         <option value="">Que resulten de un labor investigativa – Divulgación Nacional</option>
                         <option value="">Que resulten de un labor investigativa – Divulgación Regional</option>
                         <option value="">De texto – Divulgación Internacional</option>
                         <option value="">De texto – Divulgación Nacional</option>
                         <option value="">De texto – Divulgación Regional</option>
                         <option value="">De ensayo -Divulgación internacional </option>
                         <option value="">De ensayo -Divulgación Nacional </option>
                         <option value="">De ensayo -Divulgacion Regional </option>
                         <option value="">Libros  - Divulgación internacional</option>
                         <option value="">Libros  - Divulgación Nacional</option>
                         <option value="">Libros  - Divulgación Regional</option>
                         <option value="">Premios internacionales</option>
                         <option value="">Segundo puesto</option>
                         <option value="">Tercer puesto</option>
                         <option value="">Menciones</option>
                         <option value="">Premios nacionales </option>
                         <option value="">Segundo puesto</option>
                         <option value="">Tercer puesto</option>
                         <option value="">Por cada una</option>
                         <option value="">Obras originales</option>
                         <option value="">De impacto o trascendencia internacional</option>
                         <option value="">De impacto o trascendencia Nacional</option>
                         <option value="">Obras complementarias o de apoyo</option>
                         <option value="">De impacto o trascendencia internacional</option>
                         <option value="">De impacto o trascendencia Nacional</option>
                         <option value="">Interpretaciones</option>
                         <option value="">De impacto o trascendencia internacional</option>
                         <option value="">De impacto o trascendencia Nacional</option>
                         <option value="">Diseño de sistemas o procesos que constituyen una innovación tecnológica y que tienen impacto y aplicación</option>
                         <option value="">Diseño de sistemas o procesos que constituyen una adaptación tecnológica y que tienen impacto y aplicación</option>
                         <option value="">Producción de Software – Producción científica</option>
                         <option value="">Producción de Software – Producción Tecnológica</option>
                         <option value="">Difusión  e impacto regional</option>
                         <option value="">Producción con carácter documental</option>
                         <option value="">Obras de trascendencia regional</option>
                         <option value="">Obras complementarias o de apoyo de trascendencia regional</option>
                         <option value="">Interpretaciones de trascendencia regional</option>
                         <option value="">Evento Internacional</option>
                         <option value="">Evento Nacional</option>
                         <option value="">Evento Regional</option>
                         <option value="">Publicaciones impresas universitarias, (Working paper) </option>
                         <option value="">Reseñas críticas</option>
                         <option value="">Revistas especializadas y temáticas</option>
                         <option value="">Revistas divulgativas, culturales o de opinión, no temáticas</option>
                         <option value="">Estudios Posdoctorales</option>
                         <option value="">Artículos o capítulos</option>
                         <option value="">Dirección individual de tesis maestría</option>
                         <option value="">Dirección individual de tesis doctorado</option>
                   </select>
                 </div>
             </div>
                                     
              <div class="form-group{{ $errors->has('Archivo') ? ' has-error' : '' }}">
                   <label type="name">Certificado</label>
                   <input class="form-control" type="file" name="Archivo">
              </div>

              <div class="form-group{{ $errors->has('Fecha') ? ' has-error' : '' }}">
                   <label>Fecha</label>
                   <input class="form-control" type="date" name="Fecha">
               </div>

               <hr>
               <br>
               <br>

              <div class="form-group{{ $errors->has('submit') ? ' has-error' : '' }}">
                   <button type="button" id="add-more" name="submit">Agregar otra Productividad</button>
                   <input type="submit" name="submit" value="Continuar">
              </div>

		{!!Form::close()!!} 
	</div>
@endsection