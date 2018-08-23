$(document).ready(function() {

    // for logout function
    $('#logout').on('click', function(e) {
        e.preventDefault();
        $('#logoutForm').submit();
    });

    // open image upload wizard when click on image.
    $('#profileImage').on('click', function() {
        $('#profileImageUpload').trigger('click');
    });

    // for client activate and deactivate
    $('.clientAD').on('click', function(e) {
        e.preventDefault();

        $(this).next().submit();
    });

    // for delete function
    $('.deleteButton').on('click', function(e) {
        e.preventDefault();
        $('.deleteForm').submit();
    });

    // select2 for doctor index page.
    $('.select2-doctor-index').select2({
        placeholder:'Search With Department',
    }).on('select2:select', function(e) {
        var id = e.params.data['id'];

        $('#departmentSearch').val(id);
        $('#departmentSearch').parent().submit();
    });

    // select2 for schedule add page.
    $('.select2-schedule-index').select2({
    });

    // datetimepicker for schedule index page.
    $('.dateTimePicker').datetimepicker({
        format: 'YYYY-MM-DD',
    }).on('dp.hide', function(e) {
        $('#dateTimeForm').submit();
    });

    // datetimepicker for schedule add page.
    $('.dateTimePicker2').datetimepicker({
        format:'YYYY-MM-DD',
    });

    $('.dateTimePicker3').datetimepicker({
        format: 'LT'
    });
});