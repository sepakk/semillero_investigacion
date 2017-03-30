$(document).ready(function () {
    $('#libreta').click(function () {
        //$("#txtAge").toggle(this.checked);
        if ($(this).is(':checked')) {
            $('#file').removeClass('hidden');
        } else {
            $('#file').addClass('hidden');

        }
    });

    var active = false;

    $("#collapse").click(function(){
        active = !active;
        if(active)
            $("ul").css({"height": "auto"});
        else
            $("ul").css({"height": "40px"});

    });

    

    $(window).load(function () { //Do the code in the {}s when the window has loaded 
        $(".loading-screen").addClass('hide');
    });

    $("#add-more").click(function () {
        var last = $(".duplicate:last");
        $(".duplicate:last").clone().insertAfter(".duplicate:last");
        $(".duplicate:last").find('select[name=departamento]').addClass('hidden');
        $(".duplicate:last").find('select[name=ciudad]').addClass('hidden');
        $(".duplicate:last").find('#nciudad').addClass('hidden');
        $(".duplicate:last").find('#ndepto').addClass('hidden');
    });
});

$(document).on('change', 'select[name=país]', function (e) {
    if ($(this).val() == '39') {
        $(this).parent().parent().find('select[name=departamento]').removeClass('hidden');
        $(this).parent().parent().find('select[name=ciudad]').removeClass('hidden');
        $(this).parent().parent().find('#ndepto').removeClass('hidden');
        $(this).parent().parent().find('#nciudad').removeClass('hidden');
    } else {
        $(this).parent().parent().find('select[name=departamento]').addClass('hidden');
        $(this).parent().parent().find('select[name=ciudad]').addClass('hidden');
        $(this).parent().parent().find('#nciudad').addClass('hidden');
        $(this).parent().parent().find('#ndepto').addClass('hidden');

    }
});

$(document).on('click', '#graduado', function () {
    if ($(this).is(':checked')) {
        $(this).parent().parent().find(".graduado-hide").removeClass('hidden');
    } else {
        $(this).parent().parent().find(".graduado-hide").addClass('hidden');
    }
});
