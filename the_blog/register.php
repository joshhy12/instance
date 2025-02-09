<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Database configuration
$host = "localhost";
$dbname = "my_database";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Only POST requests allowed", 405);
    }

    $required = ['fullName', 'regNumber', 'sex', 'email', 'region', 'district', 'password', 'confirmPassword'];
    $data = [];
    
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("All fields are required", 400);
        }
        $data[$field] = htmlspecialchars(trim($_POST[$field]));
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email format", 400);
    }

    if ($data['password'] !== $data['confirmPassword']) {
        throw new Exception("Passwords do not match", 400);
    }

    if (!preg_match('/^[A-Z]{3}-\d{2}-\d{4}-\d{4}$/i', $data['regNumber'])) {
        throw new Exception("Invalid registration number format", 400);
    }

    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? OR regNumber = ?");
    $stmt->execute([$data['email'], $data['regNumber']]);
    
    if ($stmt->rowCount() > 0) {
        throw new Exception("User already exists", 409);
    }

    $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users 
        (fullName, regNumber, sex, email, region, district, password)
        VALUES (?, ?, ?, ?, ?, ?, ?)");

    $stmt->execute([
        $data['fullName'],
        $data['regNumber'],
        $data['sex'],
        $data['email'],
        $data['region'],
        $data['district'],
        $hashedPassword
    ]);

    echo json_encode([
        'success' => true,
        'message' => 'Registration successful!',
        'userId' => $pdo->lastInsertId()
    ]);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
} catch (Exception $e) {
    http_response_code($e->getCode() ?: 400);
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}