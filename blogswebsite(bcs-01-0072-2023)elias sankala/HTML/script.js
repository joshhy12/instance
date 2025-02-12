$(document).ready(function () {
    $.ajax({
        url: "get_regions.php",
        method: "GET",
        success: function (data) {
            $("#region").append(data);
        }
    });

    $("#region").change(function () {
        var regionID = $(this).val();
        $.ajax({
            url: "get_districts.php",
            method: "POST",
            data: { regionID: regionID },
            success: function (data) {
                $("#district").html(data);
            }
        });
    });

    $("#registrationForm").submit(function (e) {
        var isValid = true;
        var fullName = $("#fullName").val();
        if (!/^[a-zA-Z\s]+$/.test(fullName)) {
            alert("Invalid full name format!");
            isValid = false;
        }

        var regNumber = $("#regNumber").val();
        var regPattern = /^BCS-\d{2}-\d{4}-\d{4}$/;
        if (!regPattern.test(regNumber)) {
            alert("Invalid Registration Number format!");
            isValid = false;
        }

        var email = $("#email").val();
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            alert("Invalid email format!");
            isValid = false;
        }

        var password = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();
        if (password.length < 8 || !/[!@#$%^&*]/.test(password)) {
            alert("Password must be at least 8 characters long and contain a special character!");
            isValid = false;
        }
        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault();
        }
    });
});