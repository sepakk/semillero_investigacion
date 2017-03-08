$("#departamento").change(event => {
	$.get(`ciudades/${event.target.value}`, function(res, sta){
		$("#ciudad").empty();
		res.forEach(element => {
			$("#ciudad").append(`<option value=${element.cod_ciudad}> ${element.nombre_ciudad} </option>`);
		});
	});
});