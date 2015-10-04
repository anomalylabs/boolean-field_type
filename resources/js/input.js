$(function () {

    // Initialize switches
    $('.boolean-field-type [data-provides="switch"]').each(function () {
        $(this).bootstrapSwitch();
    });
});
