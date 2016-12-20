$(document).on('ajaxComplete ready', function () {

    setTimeout(function () {

        // Initialize form switches
        $('[data-provides="anomaly.field_type.boolean"]').each(function () {
            $(this).bootstrapSwitch();
        });
        
    }, 10);
});
