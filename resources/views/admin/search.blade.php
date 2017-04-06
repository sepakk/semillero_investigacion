{!! Form::open(array('url'=>'/admin','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group container" style="max-width: 500px; margin: 0px auto">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar.." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

<div class="form-group container" style="max-width: 500px; margin: 0px auto; text-align: center">
	<label class="form-label" for="select_orden" style="margin-top: 15px">Ordenar Por</label>
	<select name="select_orden" class="form-control">
		<option value="0">Por Nombre</option>
		<option value="1">Por Ponderación</option>
	</select>
</div>

{{Form::close()}}