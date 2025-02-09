$(document).ready(function() {
    // Initially disable the submit button
    $('#submitButton').attr('disabled', true);

    // Registration Form Submit Handling
    $('#registrationForm').submit(function(event) {
        event.preventDefault(); // Prevents the default form submission

        var isValid = true; // Flag for tracking form validation status

        // Validate Full Name
        if ($('#fullName').val() === "") {
            $('#fullNameError').text('Full Name is required');
            isValid = false;
        } else {
            $('#fullNameError').text('');
        }

        // Validate Registration Number
        var regNum = $('#registrationNumber').val();
        var regNumPattern = /^[A-Za-z]{3}-\d{2}-\d{4}-\d{4}$/;
        if (regNum === "") {
            $('#registrationNumberError').text('Registration Number is required');
            isValid = false;
        } else if (!regNumPattern.test(regNum)) {
            $('#registrationNumberError').text('Invalid registration number format. It should be BCS-XX-XXXX-XXXX.');
            isValid = false;
        } else {
            $('#registrationNumberError').text('');
        }

        // Validate Email
        var email = $('#email').val();
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (email === "") {
            $('#emailError').text('Email is required');
            isValid = false;
        } else if (!emailPattern.test(email)) {
            $('#emailError').text('Please enter a valid email address.');
            isValid = false;
        } else {
            $('#emailError').text('');
        }

        // Validate Password
        var password = $('#password').val();
        if (password.length < 8) {
            $('#passwordError').text('Password must be at least 8 characters long.');
            isValid = false;
        } else if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            $('#passwordError').text('Password must contain at least one special character.');
            isValid = false;
        } else {
            $('#passwordError').text('');
        }

        // Validate Confirm Password
        var confirmPassword = $('#confirmPassword').val();
        if (confirmPassword !== password) {
            $('#confirmPasswordError').text('Passwords do not match.');
            isValid = false;
        } else {
            $('#confirmPasswordError').text('');
        }

        // Validate Region and District
        if ($('#region').val() === '') {
            alert('Please select a region');
            isValid = false;
        }
        if ($('#district').val() === '') {
            alert('Please select a district');
            isValid = false;
        }

        // Check if everything is valid
        if (isValid) {
            // Enable the submit button and submit the form
            $('#submitButton').attr('disabled', false);  // Enable submit button
            this.submit(); // Proceed with form submission
        } else {
            $('#submitButton').attr('disabled', true); // Keep button disabled if not valid
        }
    });

    // Region and Districts logic (using Ajax)
    $('#region').on('change', function() {
        var region = $(this).val();
        var districts = {
            'ARUSHA': ['karatu', 'longido', 'Arusha mjini','Munduli','Ngorongoro'],
            'TANGA': ['Mkinga', 'Muhenza', 'Handeni','Korogwe','lushoto','Pangani','Kilindi'],
            'DODOMA': ['Kondoa', 'Chamwino', 'Kongwa','Bahi','Chemba','Mpwapwa','Dodoma'],
            'ZANZIBAR': ['Mjini', 'Magharibi A', 'Magharibi B','Kusini','wete','Chake chake','Mkoani'],
            'PWANI': ['Bagamoyo', 'Chalinze', 'Kibaha','Kibiti','Kisarawe','Mafia','Mkuranga'],
            'DAR ES SALAAM': ['Kinondoni', 'Ubungo', 'Ilala','Temeke','Kigamboni'],
        };

        $('#district').empty(); // Clear existing options
        $('#district').append('<option value="">Select District</option>'); // Default placeholder

        if (region && districts[region]) {
            districts[region].forEach(function(district) {
                $('#district').append('<option value="' + district + '">' + district + '</option>');
            });
        }
    });
});
