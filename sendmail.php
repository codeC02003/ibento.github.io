<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardName = $_POST['cardName'];
    $cardNumber = $_POST['cardNumber'];
    $expirationDate = $_POST['expirationDate'];
    $cvv = $_POST['cvv'];

    if (!preg_match('/^\d{16}$/', $cardNumber)) {
        echo "Please enter a valid 16-digit card number.";
        exit;
    }
    if (!preg_match('/^\d{3}$/', $cvv)) {
        echo "Please enter a valid 3-digit CVV.";
        exit;
    }

    if (empty($cardName) || empty($cardNumber) || empty($expirationDate) || empty($cvv)) {
        echo "Please fill in all fields.";
        exit;
    }

    $currentDate = new DateTime();
    $selectedDate = new DateTime($expirationDate);

    if ($selectedDate <= $currentDate) {
        echo "Please select a date that is after the current date.";
        exit;
    }

    if (isset($_SESSION['user'])) {
        $userEmail = $_SESSION['user'];
        echo "user is logged in as : $userEmail";
        $concertName = $_SESSION['concertName']; 
        $concertDate = $_SESSION['concertDate'];
        $concertVenue = $_SESSION['concertVenue'];

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
        $mail->addAddress($userEmail);
        $mail->isHTML(true);
            $mail->Subject = 'Thank You for Contacting IBENTO Support';
            $plainText = 'Thank you for contacting IBENTO Support. Your concert pass details are attached as HTML, which you can view in an HTML-compatible email client';
        ob_start();
        include('eg.php');
        $egContent = ob_get_clean(); 
        ob_end_clean(); 

        $mail->isHTML(true);
        $mail->Subject = 'Thank You for Contacting IBENTO Support';

        $mail->Body = $egContent;
        $mail->AltBody = $plainText;

        $mail->send();
        header('Location: eg.php');
            exit;
        
        echo "Your Ticket is emailed to you successfully";
    } catch (Exception $e) {
        echo "<script>alert('Your message couldn't be sent. Please try again');</script>";
    }
} else {
    echo "<script>alert('User not logged in. Please log in to send the email.');</script>";
}

}
?>
