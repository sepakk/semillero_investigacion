$(document).on('change', '#departamento',event => {
	var select = $(event.target);
	$.get(`ciudades/${event.target.value}`, function(res, sta){
		select.parent().parent().find("#ciudad").empty();
		select.parent().parent().find("#ciudad").append(`<option value="0"> Seleccione Ciudad </option>`);
		res.forEach(element => {
			select.parent().parent().find("#ciudad").append(`<option value=${element.cod_ciudad}> ${element.nombre_ciudad} </option>`);
		});
	});
});
$(document).on('change', '#select_Especializaciones',event => {
	var select = $(event.target);
	$.get(`categorias/${event.target.value}`, function(res, sta){
		select.parent().parent().find("#select_Tipo").empty();
		res.forEach(element => {
			select.parent().parent().find("#select_Tipo").append(`<option value=${element.cod_categoria}> ${element.nombre_categoria} </option>`);
		});
	});
});