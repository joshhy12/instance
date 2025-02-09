if ($conn->query($sql) === TRUE) {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success', 'message' => 'Registration successful! Welcome to Agriculture Products Sales System']);
    exit();
} else {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $conn->error]);
    exit();
}
