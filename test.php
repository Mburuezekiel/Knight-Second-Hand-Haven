<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Now</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <h1>Make a Purchase</h1>
    <form id="paymentForm">
        <label for="itemName">Item Name:</label>
        <input type="text" id="itemName" name="itemName" required><br><br>

        <label for="amount">Amount (KES):</label>
        <input type="number" id="amount" name="amount" min="1" required><br><br>

        <button type="button" onclick="makePayment()">Pay Now</button>
    </form>

    <script>
        function makePayment() {
            // Fetch data from form
            var itemName = document.getElementById("itemName").value;
            var amount = document.getElementById("amount").value;

            // Call Safaricom Payment Gateway API to process the payment
            // You would need to replace the placeholders below with actual API endpoint and parameters
            var paymentData = {
                itemName: itemName,
                amount: amount,
                // Add other necessary parameters here
            };

            // Send payment data to the backend for processing
            fetch('/process_payment', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(paymentData),
            })
            .then(response => response.json())
            .then(data => {
                // Handle response from Safaricom Payment Gateway API
                console.log(data);
                // Redirect user to payment gateway or show response message
                // For example:
                if (data.success) {
                    window.location.href = data.paymentUrl; // Redirect to payment gateway
                } else {
                    alert('Payment failed. Please try again later.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again later.');
            });
        }
    </script>
</body>
</html>
