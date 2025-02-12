<?php
require_once 'config.php';

header('Content-Type: application/json');

$query = "SELECT * FROM regions ORDER BY name";
$result = $conn->query($query);

$regions = array();
while ($row = $result->fetch_assoc()) {
    $regions[] = $row;
}

echo json_encode($regions);
?>
