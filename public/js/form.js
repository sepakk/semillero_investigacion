$( document ).ready(function() {
    $('#libreta').click(function() {
	    //$("#txtAge").toggle(this.checked);
	    if($(this).is(':checked')){
			$('#file').removeClass('hidden');
		}
		else{
			$('#file').addClass('hidden');
		
		}
	});

	$('select[name=país]').change(function(e){
		console.log($(this).val());
		if($(this).val() == '39'){
			$('select[name=departamento]').removeClass('hidden');
			$('select[name=ciudad]').removeClass('hidden');
		}
		else{
			$('select[name=departamento]').addClass('hidden');
			$('select[name=ciudad]').addClass('hidden');
		
		}
	});

	$(window).load(function() {      //Do the code in the {}s when the window has loaded 
 	  $(".loading-screen").addClass('hide');
 	});
 
 	$("#add-more").click(function(){
 		var last = $(".duplicate:last");
 		$(".duplicate:last").clone().insertAfter(".duplicate:last");
 	});
});