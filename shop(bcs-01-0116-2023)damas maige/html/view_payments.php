<?php
include 'db.php';

$sql = "SELECT * FROM payments ORDER BY payment_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Transaction ID</th>
                <th>Username</th>
                <th>Transaction Method</th>
                <th>Phone Number</th>
                <th>Payment Status</th>
                <th>Service Type</th>
                <th>Payment Date</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['transaction_id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['transaction_method']."</td>
                <td>".$row['phone_number']."</td>
                <td>".$row['payment_status']."</td>
                <td>".$row['service_type']."</td>
                <td>".$row['payment_date']."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No payments found!";
}

$conn->close();
?>
