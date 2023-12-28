<?php
session_start();

$servername = "localhost";
$username = "impostor";
$password = "root";
$dbname = "ibento";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT email, password FROM entries WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

	if ($user && $user['password'] === $password) {
        $_SESSION['user'] = $user['email'];
        header("Location: IBENTO_4.php");
        exit();
    } else {
        echo "<script>Login failed. Please check your email and password.)</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Event Sign-In</title>
<style>
	body {
			margin: 0;
			padding: 0;
			background-image: url("bg1.jpg");
			background-size: cover;
			font-family: 'Poppins',sans-serif;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 55vh;
			width: 400px;
			margin: 50px auto;
			padding: 50px;
			color: whitesmoke;
		}
		
		h1 {
			text-align: center;
			font-size: 36px;
			margin-bottom: 20px;
			font-family: 'Pacifico', cursive;
		}

		form {
            background-color: #fff;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 100%;
			color: #292929;
			border-radius: 10px;
			box-shadow: 0 0 5px rgba(0,0,0,0.3);
			padding: 40px;
		}

		label {
			font-size: 18px;
			margin-bottom: 10px;
			text-align: left;
			width: 100%;
			font-family: 'Pacifico', cursive;
		}

		input[type="text"],
		input[type="password"] {
			padding: 10px;
			font-size: 18px;
			border: none;
			border-bottom: 2px solid #ccc;
			margin-bottom: 20px;
			width: 100%;
		}

		input[type="submit"] {
			background: #0b0817;
			color: #fff;
			padding: 10px;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background 0.3s ease-in-out;
			width: 100%;
		}

		input[type="submit"]:hover {
			background: #0b0817;
		}


		.register {
			background: #0b0817;
			color: #fff;
			padding: 10px;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background 0.3s ease-in-out;
			width: 100%;
            text-decoration: none;
            text-align: center;
		}
	</style>
</head>
<body>
<div class="container">
    <h1>LOGIN</h1>
    <form method="post">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Sign In">
        <br>
        <a href="register.php" class="register">Register</a>
    </form>
	<div id="error-message" style="display: none;">
        <p><?php echo $error_message; ?></p>
</div>
<script>
    const form = document.querySelector('#signin-form');
    const emailInput = document.querySelector('#email');
    const passwordInput = document.querySelector('#password');
    const errorContainer = document.getElementById('error-message');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        if (emailInput.value.trim() === '' || passwordInput.value.trim() === '') {
            errorContainer.style.display = 'block';
            return;
        }
        form.submit();
    });
</script>

<script src="script4.js"></script>
</body>
</html>