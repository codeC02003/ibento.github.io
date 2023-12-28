<?php
session_start();
$servername = "localhost";
$username = "impostor";
$password = "root";
$dbname = "ibento";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $concertName = isset($_GET['concert']) ? $_GET['concert'] : null;
    $stmt = $conn->prepare("SELECT * FROM ticket WHERE name = :concertName");
    $stmt->bindParam(':concertName', $concertName, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        $concertName = $row['name'];
        $concertDate = $row['date'];
        $concertTime = $row['time'];
        $concertVenue = $row['venue'];
        $concertCost = $row['cost'];

    
        $_SESSION['concertName'] = $concertName;
        $_SESSION['concertDate'] = $concertDate;
        $_SESSION['concertVenue'] = $concertVenue;
        $_SESSION['concertTime'] = $concertTime;

    } else {
        $concertName = "Concert Not Found";
        $concertDate = "N/A";
        $concertTime = "N/A";
        $concertVenue = "N/A";
        $concertCost = 0;
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>IBENTO Ticket Details</title>
<style>    
body {
    font-family: 'Poppins', sans-serif;
    background: url("bg1.jpg");
    color: white;
    text-align: center;
    margin: 0;
    padding: 0;
}

form {
    background:white;
    color: black;
    border: 1px solid #fff; 
    border-radius: 15px; 
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); 
    padding: 20px;
    margin: 20px;
    max-width: 400px; 
    margin: 0 auto;
}

h1 {
    font-size: 36px;
    margin: 20px 0;
}

p {
    font-size: 18px;
    margin: 10px 0;
}

label {
    font-size: 18px;
    margin: 10px 0;
}

input[type="number"] {
    width: 60px;
    height: 30px;
    font-size: 16px;
    border: 1px solid white;
    border-radius: 5px;
    padding: 5px;
    background: transparent;
    color: white;
}

input[type="number"]:focus {
    outline: none;
}

#seatCount, #totalCost {
    font-weight: bold;
    color: #007BFF;
}

#totalCost {
    font-size: 24px;
    margin-top: 20px;
}

header {
    background: #0b0817;
    padding: 30px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

h2#text {
    font-size: 24px;
    margin-left: 20px;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.nav {
    margin-right: 20px;
}

.nav a {
    color: white;
    margin: 0 15px;
    text-decoration: none;
    font-weight: 600;
}

.nav a:hover {
    background: white;
    color: black;
    transition: 0.5s;
}
.continue {
    background-color: black;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    position: relative;
    transition: background-color 0.3s, color 0.3s;
    text-decoration: none;
}
        
.continue:hover {
    background-color: white; 
    color: black;
    text-decoration: none;
}

</style>
</head>
<body><form>
    <h1>Ticket Details for <?php echo $concertName; ?></h1>
    <p>Date: <?php echo $concertDate; ?></p>
    <p>Time: <?php echo $concertTime; ?></p>
    <p>Venue: <?php echo $concertVenue; ?></p>
    <p>Number of Seats: <span id="seatCount">0</span></p>
    <p>Cost per Seat: $<?php echo $concertCost; ?></p>
    <p>Total Cost: $<span id="totalCost">0</span></p>
    <a href="bank.php" class="continue">Conitnue</a>
</form>
    <label for="seatQuantity">Select the number of seats: </label>
    <input type="number" id="seatQuantity" name="seatQuantity" min="0" onchange="calculateCost()">
    
    <script>
        function calculateCost() {
            const seatQuantity = parseInt(document.getElementById('seatQuantity').value);
            const totalCost = seatQuantity * <?php echo $concertCost; ?>;
            document.getElementById('seatCount').textContent = seatQuantity;
            document.getElementById('totalCost').textContent = totalCost;
        }
    </script>
</body>
</html>