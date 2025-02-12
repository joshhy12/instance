<?php
require_once 'config.php';

header('Content-Type: application/json');

if (isset($_GET['region_id'])) {
    $regionId = filter_var($_GET['region_id'], FILTER_SANITIZE_NUMBER_INT);
    
    $stmt = $conn->prepare("SELECT * FROM districts WHERE region_id = ? ORDER BY name");
    $stmt->bind_param("i", $regionId);
    $stmt->execute();
    $result = $stmt->get_result();

    $districts = array();
    while ($row = $result->fetch_assoc()) {
        $districts[] = $row;
    }

    echo json_encode($districts);
}
?>
