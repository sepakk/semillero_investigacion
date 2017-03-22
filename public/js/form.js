$(document).ready(function () {
    $('#libreta').click(function () {
        //$("#txtAge").toggle(this.checked);
        if ($(this).is(':checked')) {
            $('#file').removeClass('hidden');
        } else {
            $('#file').addClass('hidden');

        }
    });

    $('select[name=país]').change(function (e) {
        console.log($(this).val());
        if ($(this).val() == '39') {
            $('select[name=departamento]').removeClass('hidden');
            $('select[name=ciudad]').removeClass('hidden');
            $('#ndepto').removeClass('hidden');
            $('#nciudad').removeClass('hidden');
        } else {
            $('select[name=departamento]').addClass('hidden');
            $('select[name=ciudad]').addClass('hidden');
            $('#nciudad').addClass('hidden');
            $('#ndepto').addClass('hidden');

        }
    });

    $(window).load(function () { //Do the code in the {}s when the window has loaded 
        $(".loading-screen").addClass('hide');
    });

    $("#add-more").click(function () {
        var last = $(".duplicate:last");
        $(".duplicate:last").clone().insertAfter(".duplicate:last");
    });
});

$(document).on('click', '#graduado', function () {
    if ($(this).is(':checked')) {
        $(this).parent().parent().find(".graduado-hide").removeClass('hidden');
    } else {
        $(this).parent().parent().find(".graduado-hide").addClass('hidden');
    }
});
