@extends('layouts.admin')

@section('contenido')
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="error-template">
	                <h1>
	                    Ups!</h1>
	                <div class="error-details">
	                    <?php  echo $msj; ?>
	                </div>
	                <div class="error-actions">
	                    <a href="/" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
	                        Volver al Inicio </a><a href="/soporte" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contactar Soprte </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<style type="text/css">
		body { 
			background-color: #0E3D38;
		} 
		.error-template {
			padding: 40px 15px;text-align: center;
		} 
		.error-actions {
			margin-top:15px;margin-bottom:15px;
		} 
		.error-actions .btn { 
			margin-right:10px; 
		}
	</style>
@endsection