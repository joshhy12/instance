<?php
// Include database connection
include('db.php');  // Assuming 'db.php' contains the connection code above

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize input data
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $registration_number = mysqli_real_escape_string($conn, $_POST['registration_number']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $region = mysqli_real_escape_string($conn, $_POST['region']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query to insert data into the database
    $sql = "INSERT INTO users (full_name, registration_number, gender, email, region, district, password)
            VALUES ('$full_name', '$registration_number', '$gender', '$email', '$region', '$district', '$hashed_password')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Registration successful! Welcome to Agriculture Products Sales System']);
        exit();
    } else {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $conn->error]);
        exit();
    }


    // Close the connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration - Agriculture Products Sales System</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <h1>Agriculture Products Sales</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Registration Form</h2>
            <form id="registrationForm">
                <label>Full Name:</label>
                <input type="text" id="fullName" name="full_name" required>
                <span class="error" id="nameError"></span>

                <label>Registration Number:</label>
                <input type="text" id="regNumber" name="registration_number" placeholder="BCS-00-0000-0000" required>
                <span class="error" id="regError"></span>

                <label>Gender:</label>
                <select id="gender" name="gender">
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label>Email:</label>
                <input type="email" id="email" name="email" required>
                <span class="error" id="emailError"></span>

                <label>Region:</label>
                <select id="region" name="region"></select>

                <label>District:</label>
                <select id="district" name="district"></select>

                <label>Password:</label>
                <input type="password" id="password" name="password" required>

                <label>Confirm Password:</label>
                <input type="password" id="confirmPassword" required>
                <span class="error" id="passwordError"></span>

                <button type="submit">Register</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Agriculture Products Sales System. All rights reserved.</p>
    </footer>

    <script>
        $(document).ready(function() {
            // Region and District
            const regions = {
                'Region A': ['District 1', 'District 2'],
                'Region B': ['District 3', 'District 4']
            };

            $('#region').append('<option value="">Select Region</option>');
            $.each(regions, function(region) {
                $('#region').append(`<option value="${region}">${region}</option>`);
            });

            $('#region').change(function() {
                const selectedRegion = $(this).val();
                $('#district').empty().append('<option value="">Select District</option>');
                if (selectedRegion) {
                    $.each(regions[selectedRegion], function(index, district) {
                        $('#district').append(`<option value="${district}">${district}</option>`);
                    });
                }
            });

            // Form Validation
            $('#registrationForm').submit(function(event) {
                event.preventDefault();
                let isValid = true;

                // Full Name Validation
                const fullName = $('#fullName').val();
                if (!/^[A-Za-z ]+$/.test(fullName)) {
                    isValid = false;
                    $('#nameError').text('Enter a valid name.');
                } else {
                    $('#nameError').text('');
                }

                // Registration Number Validation
                const regNumber = $('#regNumber').val();
                if (!/^BCS-\d{2}-\d{4}-\d{4}$/.test(regNumber)) {
                    isValid = false;
                    $('#regError').text('Invalid registration format.');
                } else {
                    $('#regError').text('');
                }

                // Email Validation
                const email = $('#email').val();
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    isValid = false;
                    $('#emailError').text('Invalid email format.');
                } else {
                    $('#emailError').text('');
                }

                // Password Validation
                const password = $('#password').val();
                const confirmPassword = $('#confirmPassword').val();
                if (password.length < 8 || !/[!@#$%^&*]/.test(password) || password !== confirmPassword) {
                    isValid = false;
                    $('#passwordError').text('Password must be 8+ chars with special chars and match confirmation.');
                } else {
                    $('#passwordError').text('');
                }

                // Submit form if valid
                if (isValid) {
                    const formData = {
                        full_name: $('#fullName').val(),
                        registration_number: $('#regNumber').val(),
                        gender: $('#gender').val(),
                        email: $('#email').val(),
                        region: $('#region').val(),
                        district: $('#district').val(),
                        password: $('#password').val()
                    };

                    console.log('Sending AJAX request with data:', formData); // Log the data being sent

                    // Replace the existing AJAX success handler with this:
                    $.ajax({
                        url: 'register.php',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            console.log('Received response:', response);
                            if (response.status === 'success') {
                                alert(response.message);
                                setTimeout(function() {
                                    window.location.href = 'home.html';
                                }, 1000);
                            } else {
                                alert('Registration failed: ' + response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log('Error details:', xhr.responseText);
                            alert('Registration error occurred. Please try again.');
                        }
                    });


                }
            });
        });
    </script>
</body>

</html>