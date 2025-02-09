<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 2rem;
            margin: 0;
        }

        .checkout-container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .checkout-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 2rem;
            padding: 2rem;
        }

        .section {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 10px;
        }

        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #34495e;
            font-weight: 500;
        }

        input, select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #dfe6e9;
            border-radius: 6px;
            font-size: 1rem;
        }

        .cart-summary {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid #ecf0f1;
        }

        .total-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #27ae60;
            margin-top: 1.5rem;
        }

        .payment-button {
            background: #3498db;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s ease;
        }

        .payment-button:hover {
            background: #2980b9;
        }

        @media (max-width: 768px) {
            .checkout-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="checkout-container">
        <div class="checkout-grid">
            <!-- Left Column - Form Sections -->
            <div class="form-sections">
                <div class="section">
                    <h2>Contact Information</h2>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="tel" placeholder="Enter your phone number">
                    </div>
                </div>

                <div class="section">
                    <h2>Shipping Address</h2>
                    <div class="form-group">
                        <input type="text" placeholder="Street Address">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="State/Province">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="ZIP/Postal Code">
                    </div>
                </div>

                <div class="section">
                    <h2>Payment Method</h2>
                    <div class="form-group">
                        <select>
                            <option>Credit Card</option>
                            <option>PayPal</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Right Column - Cart Summary -->
            <div class="cart-summary">
                <h2>Your Cart</h2>
               
                <button class="payment-button">Proceed to Payment</button>
            </div>
        </div>
    </div>
</body>
</html>