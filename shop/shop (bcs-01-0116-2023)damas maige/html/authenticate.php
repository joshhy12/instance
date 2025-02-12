<?php
    session_start();
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $registration_number = $_POST["registration_number"];
        $password = $_POST["password"];

        $stmt = $conn->prepare("SELECT id, full_name, password_hash FROM users WHERE registration_number = ?");
        $stmt->bind_param("s", $registration_number);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($id, $full_name, $password_hash);
        
        if ($stmt->num_rows > 0) {
            $stmt->fetch();
            if (password_verify($password, $password_hash)) {
                $_SESSION["user_id"] = $id;
                $_SESSION["full_name"] = $full_name;
                header("Location: index.php");
                exit();
            } else {
                echo "Invalid password. <a href='login.php'>Try again</a>";
            }
        } else {
            echo "User not found. <a href='index.php'>Register here</a>";
        }

        $stmt->close();
    }
    $conn->close();
    ?>
