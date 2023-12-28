<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <style>
    body {
        background: url("bg1.jpg");
        font-family: 'Poppins', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        color:white;
    }

    .form-container {
        border-radius: 15px;
        padding: 20px;
        width: 300px;
    }

    .form-container label,
    .form-container input {
        display: block;
        margin-bottom: 10px;
    }

    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container input[type="password"],
    .form-container select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-container input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s, color 0.3s;
    }

    .form-container input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
    <section class="sec">
        <div class="form-container">
            <h2>Payment Details</h2>
            <form action="sendmail.php" method="post" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="cardName">Name on Card</label>
                    <input type="text" id="cardName" name="cardName" required>
                </div>
                <div class="form-group">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" id="cardNumber" name="cardNumber" required>
                </div>
                <div class="form-group">
                    <label for="expirationDate">Expiration Date</label>
                    <input type="date" id="expirationDate" name="expirationDate" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="password" id="cvv" name="cvv" required>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>
    
    <script>
    function validateForm() {
        
        const cardName = document.getElementById('cardName').value;
        const cardNumber = document.getElementById('cardNumber').value;
        const expirationDate = document.getElementById('expirationDate').value;
        const cvv = document.getElementById('cvv').value;

        // Check if the card number has exactly 16 digits
        if (!/^\d{16}$/.test(cardNumber)) {
            alert("Please enter a valid 16-digit card number.");
            return false;
        }

        // Check if the CVV has exactly 3 digits
        if (!/^\d{3}$/.test(cvv)) {
            alert("Please enter a valid 3-digit CVV.");
            return false;
        }

        // Additional validation for expiration date can be added here

        if (cardName === "" || cardNumber === "" || expirationDate === "" || cvv === "") {
            alert("Please fill in all fields.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>
