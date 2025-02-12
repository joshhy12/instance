<?php
include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registration_number = $_POST["registration_number"];
    $password = $_POST['password'];

    $sql = "SELECT password FROM customer WHERE registration_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $registration_number);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            echo "Login successful! Welcome,  . htmlspecialchars($registration_number) <a href='index.php'>Go to our service page</a>";
        } else {
            echo "Invalid password!<a href='login.php'>repeate here</a>";
        }
    } else {
        echo "No user found! <a href='register.php'>register here</a>";

        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transparent Login Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      height: 100vh;
      background: url(../IMAGE/h1\ \(1\).jpeg);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.1);
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      width: 300px;
      text-align: center;
      backdrop-filter: blur(10px);
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: black;
      font-size: 30px;
    }

    .login-container input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
      outline: none;
      background: rgba(255, 255, 255, 0.2);
      color: black;
      font-size: 16px;
    }

    .login-container input::placeholder {
      color: blue;
     
    }

    .login-container button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: none;
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.3);
      color: blue;
      font-size: 18px;
      cursor: pointer;
      transition: background 0.3s ease;
      font-size: 30px;
    }

    .login-container button:hover {
      background: rgba(255, 255, 255, 0.5);
    }
    h1{
        color: red;
        font-size: 20px;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="authenticate.php" method="POST">
      <label>Registration Number:</label>
      <input type="text" name="registration_number" required><br>

      <label>Password:</label>
      <input type="password" name="password" required><br>

      <button type="submit">Login</button>
  </form>
  
  </div>
</body>
</html>