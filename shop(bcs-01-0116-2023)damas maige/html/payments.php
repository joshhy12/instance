
<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
</head>
<style>
    body{
        background-image: url(../img/im1\ \(1\).jpg);
    }
    form{
        text-align: center;

    }
</style>
<body>
    <form action="payment.php" method="POST">
        <input type="text" name="username" placeholder="Enter Username" required><br>
        <select name="transaction_method" required>
            <option value="Credit Card">Credit Card</option>
            <option value="PayPal">PayPal</option>
            <option value="Mobile Money">Mobile Money</option>
        </select><br>
        <input type="text" name="phone_number" placeholder="Enter Phone Number" required><br>
        <select name="payment_status" required>
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
            <option value="Failed">Failed</option>
        </select><br>
        <input type="text" name="service_type" placeholder="Enter Service Type" required><br>
        <button type="submit">Submit Payment</button>
    </form>
</body>
</html>
