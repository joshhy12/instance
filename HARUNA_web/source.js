$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        var regNum = $('#registrationNumber').val();
        var regNumPattern = /^[A-Za-z]{3}-\d{2}-\d{4}-\d{4}$/;  // Updated pattern for BCS-XX-XXXX-XXXX format

        if (!regNumPattern.test(regNum)) {
            e.preventDefault();
            $('#registrationNumberError').text("Invalid registration number format. It should be BCS-XX-XXXX-XXXX.");
        } else {
            $('#registrationNumberError').text("");
        }
    });

    // Email Validation
    $('#email').on('blur', function () {
        var email = $(this).val();
        var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!regex.test(email)) {
            $('#emailError').text('Please enter a valid email address.');
        } else {
            $('#emailError').text('');
        }
    });

    // Password Validation
    $('#password').on('blur', function () {
        var password = $(this).val();
        if (password.length < 8) {
            $('#passwordError').text('Password must be at least 8 characters long.');
        } else if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            $('#passwordError').text('Password must contain at least one special character.');
        } else {
            $('#passwordError').text('');
        }
    });

    // Confirm Password Validation
    $('#confirmPassword').on('blur', function () {
        var confirmPassword = $(this).val();
        if (confirmPassword !== $('#password').val()) {
            $('#confirmPasswordError').text('Passwords do not match.');
        } else {
            $('#confirmPasswordError').text('');
        }
    });

    // Region and Districts (using Ajax)
    $('#region').on('change', function () {
        var region = $(this).val();
        var districts = {
            'KASKAZINI UNGUJA': ['kaskazini A', 'Kaskazini B'],
            'MJINI MAGHARIBI': ['mijini', 'magharibi A', 'magharibi B'],
            'KUSINI UNGUJA': ['kati', 'kusini', ],
            'KASKAZINI PEMBA': ['Micheweni', 'Wete', ],
            'KUSINI PEMBA': ['Chake chake', 'Mkoani', ]
        };

        $('#district').empty(); // Clear existing options
        $('#district').append('<option value="">Select District</option>'); // Default placeholder

        if (region && districts[region]) {
            districts[region].forEach(function (district) {
                $('#district').append('<option value="' + district + '">' + district + '</option>');
            });
        }
    });

    // Form Submission
    $('#registrationForm').on('submit', function (e) {
        e.preventDefault();

        // Check for errors
        if ($('#fullName').val() === '' || $('#registrationNumber').val() === '' || $('#email').val() === '' ||
            $('#region').val() === '' || $('#district').val() === '' || $('#password').val() === '' ||
            $('#confirmPassword').val() === '') {
            alert('Please fill all the fields correctly!');
            return;
        }
            // window.location("href=includes/formhandler.php");
    });

    // Image Carousel
    var index = 0;
    function changeSlide() {
        var slides = $('.carousel-images img');
        if (index >= slides.length) {
            index = 0;
        }
        $('.carousel-images').css('transform', 'translateX(' + (-index * 100) + '%)');
        index++;
    }
    setInterval(changeSlide, 3000);
});
$(document).ready(function() {
    $('#registrationForm').submit(function(event) {
        event.preventDefault(); // Prevents the default form submission

        // Form Validation (simple check for now)
        let isValid = true;

        // Validate Full Name
        if ($('#fullName').val() === "") {
            $('#fullNameError').text('Full Name is required');
            isValid = false;
        } else {
            $('#fullNameError').text('');
        }

        // Validate Registration Number
        if ($('#registrationNumber').val() === "") {
            $('#registrationNumberError').text('Registration Number is required');
            isValid = false;
        } else {
            $('#registrationNumberError').text('');
        }

        // Validate Password and Confirm Password
        if ($('#password').val() !== $('#confirmPassword').val()) {
            $('#confirmPasswordError').text('Passwords do not match');
            isValid = false;
        } else {
            $('#confirmPasswordError').text('');
        }

        if (isValid) {
            // If everything is valid, submit the form
            this.submit();  // Proceed with form submission
        }
    });
});
