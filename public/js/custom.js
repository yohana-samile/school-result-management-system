$(document).ready(function () {
    // subject
    $('#register_subject').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        var url = "registerSubject";

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    $('.alert').html('Data sent successfully');
                    $('.alert').show();
                    window.location.href = response.success;
                    $('#register_subject')[0].reset();
                }
            },
            error: function (xhr, status, error) {
                // Handle errors if any
                console.error(xhr.responseText);
            }
        });
    });
});
