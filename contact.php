<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<title>Contact Us :IBENTO</title>
	<style>
body {
	font-family: 'Poppins', sans-serif;
	background:url("bg1.jpg");
	margin: 0;
	padding: 0;
}

header, main, footer {
	padding: 20px;
}

header {
	background: rgba(0, 0, 0, 0.7);
	color: #fff;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

nav li {
	display: inline-block;
}

nav a {
	color: #fff;
	padding: 10px;
	text-decoration: none;
}

nav a:hover {
	background-color: #0b0817;
}

main {
	background-color: #fff;
	box-shadow: 0 0 10px rgba(0,0,0,0.2);
	margin: 20px;
	padding: 20px;
}

h1, h2, h3 {
	margin: 0;
}

p{
    color: #fff;
}
h1 {
	font-size: 2em;
	margin-bottom: 10px;
	font-family: 'Pacifico', cursive;
}

h2 {
	font-size: 1.5em;
	margin-bottom: 10px;
}

label {
	display: block;
	margin-bottom: 5px;
}

input[type="text"], input[type="email"] {
	padding: 10px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	border: 1px solid #ccc;
	border-radius: 3px;
}

textarea {
	padding: 10px;
	margin-bottom: 10px;
	width: 100%;
	height: 100px;
	box-sizing: border-box;
	border: 1px solid #ccc;
	border-radius: 3px;
}
.button {
    background-color: #0b0817;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease-in-out;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    font-size: 16px; 
}


.button:hover {
    background-color: #091f35;
}

.return-button {
    background-color: #0b0817;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease-in-out;
    text-decoration: none;
    display: inline-block;
    text-align: center;
}

.return-button:hover {
    background-color: #091f35;
}

</style>
</head>
<body>
	<header>
		<h1>IBENTO</h1>
	</header>
	<main>
		<h2>Contact Us</h2>
		<form id="contact-form" action="contact.php" method="post">
			
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			
			<label for="subject">Subject:</label>
			<input type="text" id="subject" name="subject" required>
			
			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea>
			
			<input type="submit" name="submit" class="button" value="Send">

			<a href="IBENTO_4.php" class="return-button">Return to Home Page</a>
		</form>

		<?php
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';

		if (isset($_POST['submit'])) {
			try {
				$mail = new PHPMailer(true);

				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'chinmaymhatre02003@gmail.com';
				$mail->Password = 'yjbbsozuadyzrzub';
				$mail->SMTPSecure = 'ssl';
				$mail->Port = 465;

				$mail->setFrom('chinmaymhatre02003@gmail.com');
				$mail->addAddress($_POST['email']); 
				$mail->isHTML(true);
				$mail->Subject = 'Thank You for Contacting IBENTO Support';
				$mail->Body = "Thank you for reaching out to the IBENTO support team. We have received your query and it's important to us.
				Our team will review your message and will do our best to provide you with a prompt and helpful response. We appreciate your patience during this process.
				If you have any additional information or questions, please don't hesitate to reply to this email.
				Once again, thank you for contacting us. We value your feedback and look forward to assisting you.
				Best regards,
				The IBENTO Support Team";
				$mail->send();
				
				echo "<script>alert('Your message was sent successfully');</script>";
			} catch (Exception $e) {
				echo "<script>alert('Your message couldn't be sent. Please try again');</script>";
			}
		}
		?>

	</main>
	<footer>
		<p>&copy; IBENTO</p>
	</footer>
</body>
</html>
