$(function () {

    // Initialize form switches
    $('.boolean-field_type [data-provides="switch"]').each(function () {
        $(this).bootstrapSwitch();
    });
});
