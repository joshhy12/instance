<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'jimmy_tours';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'getRegions') {
        $sql = "SELECT * FROM regions ORDER BY region_name";
        $result = $conn->query($sql);
        $regions = [];
        while ($row = $result->fetch_assoc()) {
            $regions[] = $row;
        }
        echo json_encode($regions);
    }
    
    if ($_GET['action'] === 'getDistricts') {
        $regionId = $conn->real_escape_string($_GET['regionId']);
        $sql = "SELECT * FROM districts WHERE region_id = '$regionId' ORDER BY district_name";
        $result = $conn->query($sql);
        $districts = [];
        while ($row = $result->fetch_assoc()) {
            $districts[] = $row;
        }
        echo json_encode($districts);
    }
}

$conn->close();
?>
