$(function () {

    // Initialize form switches
    $('[data-provides="anomaly.field_type.boolean"]').each(function () {
        $(this).bootstrapSwitch();
    });
});
