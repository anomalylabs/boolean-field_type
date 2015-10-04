$(function () {

    // Initialize form switches
    $('form [data-provides="switch"]').each(function () {
        $(this).bootstrapSwitch();
    });
});
