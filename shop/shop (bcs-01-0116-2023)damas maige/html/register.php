
<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = $_POST["full_name"];
        $registration_number = $_POST["registration_number"];
        $sex = $_POST["sex"];
        $region =$_POST["region"];
        $district = $_POST["district"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users (full_name, registration_number, sex, email, region, district, password_hash) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $full_name, $registration_number, $sex, $email, $region, $district, $password);
        
        if ($stmt->execute()) {
            echo "Registration successful! <a href='login.php'>Login Here</a>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
    ?>

