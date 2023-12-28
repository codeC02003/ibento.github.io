<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
    <style>
body {
  background-image: url("bg1.jpg");
  background-size: cover;
  background-position: center;
  font-family: 'Poppins',sans-serif;
}

.container {
  background: none;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80vh;
  width: 400px;
  margin: 50px auto;
  padding: 20px;
}

form {
  background-color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  color: #0b0817;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  padding: 40px;
}

h2 {
  font-size: 32px;
  margin-bottom: 30px;
  text-align: center;
  color: #292929;
}

label {
  font-weight: bold;
  margin-bottom: 10px;
  text-align: left;
  width: 100%;
  color: #292929;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.3);
  width: 100%;
  font-size: 16px;
  color: #292929;
  background-color: #f2f2f2;
}

input[type="submit"] {
  background-color: black;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  margin-top: 20px;
  
}

input[type="submit"]:hover {
  background-color: white;
  color: black;
}
    </style>
</head>
<body>
<div class="container">
        <form id="registration-form" method="post">
            <h2>Registration</h2>
            <label for="number">Mobile Number:</label>
            <input type="text" id="number" name="number" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <input type="submit" value="Register">
        </form>
        <div id="error-message" style="color: red;"></div>
    </div>

<?php
session_start();
$servername = "localhost";
$username = "impostor";
$password = "root";
$dbname = "ibento";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $mobile = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $checkEmailStmt = $conn->prepare("SELECT * FROM entries WHERE email = :email");
        $checkEmailStmt->bindParam(':email', $email);
        $checkEmailStmt->execute();

        if ($checkEmailStmt->rowCount() > 0) {
          echo '<script>alert("User with this email already exists!");</script>';
        } else {
            $stmt = $conn->prepare("INSERT INTO entries (number, email, password) VALUES (:number, :email, :password)");
            $stmt->bindParam(':number', $mobile);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            header("Location: signin.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>

    <script>
      const form = document.querySelector("#registration-form");

form.addEventListener("submit", (event) => {
    const password = form.elements["password"].value;
    const confirmPassword = form.elements["confirm-password"].value;

    if (password !== confirmPassword) {
        alert("Passwords do not match");
        event.preventDefault();
    }
});
</script>
</body>
</html>
