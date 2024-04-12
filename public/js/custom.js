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
                console.error(xhr.responseText);
            }
        });
    });

    // teacher registration
    $('#registerTeacher').on('submit', function (e){
        e.preventDefault();
        var formData = new FormData(this);
        var url = "staff/registerTeacher";

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    $('.alert').html('New Staff Teacher Registered successfully');
                    $('.alert').show();
                    window.location.href = response.success;
                    $('#registerTeacher')[0].reset();
                }
            },
            error: function (xhr, status, error) {
                alert("something went wrong");
                // console.error(xhr.responseText);
            }
        });
    });

    // student
    $('#registerStudent').on('submit', function (e){
        e.preventDefault();
        var formData = new FormData(this);
        var url = "staff/registerStudent";

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    $('.alert').html('New Staff Student Registered successfully');
                    $('.alert').show();
                    window.location.href = response.success;
                    $('#registerStudent')[0].reset();
                }
            },
            error: function (xhr, status, error) {
                alert("something went wrong");
                console.error(xhr.responseText);
            }
        });
    });
});

