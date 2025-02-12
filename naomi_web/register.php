
<?php

include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, select {
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

<div class="container">
    <h2>Registration Form</h2>
    <form id="registrationForm" action="" method="post" onsubmit="return validateForm()">
        <label>Full Name:</label>
        <input type="text" id="fullName" required name="full_name" require maxlength="30">
        <span class="error" id="nameError"></span>

        <label>Registration Number:</label>
        <input type="text" id="regNumber" placeholder="BCS-00-0000-0000" required name="registration_number">
        <span class="error" id="regError"></span>

        <label>Sex:</label>
        <select id="sex" name="sex">
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label>Email:</label>
        <input type="email" id="email" required name="email">
        <span class="error" id="emailError"></span>

        <label>Region:</label>
        <select id="" name="region">
        <option value="">Region</option>
        <option value="Arusha">Arusha</option>
        <option value="Moshi">Kilimanjaro</option>
        <option value="Dar es salaam">Dar es salaam</option>
        <option value="Dodoma">Dodoma</option>
        </select>

        <label>District:</label>
        <select id="" name="district">
        <option value="">Disctrict</option>
        <option value="Arusha">Arusha Dc</option>
        <option value="Moshi">Moshi</option>
        <option value="Temeke">Temeke</option>
        <option value="Chamwino">Chamwino</option>
        <option value="Chamwino">Korogwe</option>
        </select>

        <label>Password:</label>
        <input type="password" id="password" required name="password">

        <button type="submit" name="submit">Register</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
/*$(document).ready(function(){
    // Region and District (Ajax Simulation)
    const regions = {
        'Region A': ['District 1', 'District 2'],
        'Region B': ['District 3', 'District 4']
    };

    $('#region').append('<option value="">Select Region</option>');
    $.each(regions, function(region){
        $('#region').append(`<option value="${region}">${region}</option>`);
    });

    $('#region').change(function(){
        const selectedRegion = $(this).val();
        $('#district').empty().append('<option value="">Select District</option>');
        if (selectedRegion) {
            $.each(regions[selectedRegion], function(index, district){
                $('#district').append(`<option value="${district}">${district}</option>`);
            });
        }
    });

    // Form Validation
    $('#registrationForm').submit(function(event){
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

        if (isValid) {
            alert('Form submitted successfully!');
        }
    });

    // jQuery Animations
    $('button').hover(function(){
        $(this).css('background-color', '#28a745');
    }, function(){
        $(this).css('background-color', '#007BFF');
    });
});
</script>

<?php
if(isset($_POST['submit']))
{
    $full_name = $_POST['full_name'];
    $registration_number = $_POST['registration_number'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $region = $_POST['region'];
    $district = $_POST['district'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $sql_query = "insert into register (full_name,registration_number,sex,email,region,district,password)
    values ('$full_name','$registration_number','$sex ','$email',' $region','$district','$password')";

    $result = mysqli_query($con,$sql_query);

    if($result)
    {
        echo "<script>alert('Dear Customer your data has submitted successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }

    else 
    {
        echo "data not sent";
    }
}

?>
</body>
</html>
