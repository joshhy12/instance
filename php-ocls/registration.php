<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        /* Basic styling for demonstration */
        body {
            padding: 20px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>User Registration</h1>
    <form id="registrationForm">
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
            <span class="error" id="fullNameError"></span>
        </div>
        <div class="form-group">
            <label for="regNumber">Registration Number (BCS-00-0000-0000):</label>
            <input type="text" class="form-control" id="regNumber" name="regNumber" required>
            <span class="error" id="regNumberError"></span>
        </div>
        <div class="form-group">
            <label for="sex">Sex:</label>
            <select class="form-control" id="sex" name="sex">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <span class="error" id="emailError"></span>
        </div>
        <div class="form-group">
            <label for="region">Region:</label>
            <select class="form-control" id="region" name="region" required>
                <option value="">Select Region</option>
            </select>
        </div>
        <div class="form-group">
            <label for="district">District:</label>
            <select class="form-control" id="district" name="district" required>
                <option value="">Select District</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <span class="error" id="passwordError"></span>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            <span class="error" id="confirmPasswordError"></span>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <p>Already have a account?<a href="login.php">Login here</a>.</p>
    </form>


    <h2>Featured Content</h2>
    <div class="owl-carousel">
      <div><img src="image1.jpg" alt="Image 1" width="300"></div>
      <div><img src="image2.jpg" alt="Image 2" width="300"></div>
      <div><img src="image3.jpg" alt="Image 3" width="300"></div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



<script>
    $(document).ready(function() {

        // Carousel Initialization
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });


        // Region and District (AJAX)
        $.getJSON("regions.json", function(data) { // Load regions from JSON
            $.each(data.regions, function(key, value) {
                $("#region").append("<option value='" + value + "'>" + value + "</option>");
            });
        });

        $("#region").change(function() {
            var selectedRegion = $(this).val();
            $("#district").empty().append("<option value=''>Select District</option>"); // Clear districts

            if (selectedRegion) {
                $.getJSON("districts.json", function(data) { // Load districts based on region
                    $.each(data.districts[selectedRegion] || [], function(key, value) {
                        $("#district").append("<option value='" + value + "'>" + value + "</option>");
                    });
                });
            }
        });

        // Form Validation
        $("#registrationForm").submit(function(event) {
            $(".error").text(""); // Clear previous errors
            let isValid = true;

            // Full Name Validation (Example: Only letters and spaces)
            const fullName = $("#fullName").val();
            if (!/^[a-zA-Z\s]+$/.test(fullName)) {
                $("#fullNameError").text("Full Name must contain only letters and spaces.");
                isValid = false;
            }

            // Registration Number Validation
            const regNumber = $("#regNumber").val();
            if (!/^BCS-\d{2}-\d{4}-\d{4}$/.test(regNumber)) {
                $("#regNumberError").text("Invalid Registration Number format.");
                isValid = false;
            }

            // Email Validation
            const email = $("#email").val();
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                $("#emailError").text("Invalid email format.");
                isValid = false;
            }

            // Password Validation
            const password = $("#password").val();
            const confirmPassword = $("#confirmPassword").val();
            if (password.length < 8 || !/[!@#$%^&*()_+\-=\[\]{};':",\\|,.<>\/?]/.test(password)) {
                $("#passwordError").text("Password must be at least 8 characters and contain a special character.");
                isValid = false;
            }
            if (password !== confirmPassword) {
                $("#confirmPasswordError").text("Passwords do not match.");
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    });
</script>

</body>
</html>
