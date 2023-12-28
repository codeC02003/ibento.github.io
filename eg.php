<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Event Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .ticket {
            background-color: #fff;
            width: 300px;
            margin: 30px auto;
            padding: 20px;
            border: 2px solid #007BFF;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .event-info {
            margin: 20px 0;
        }

        .event-name {
            font-size: 20px;
            font-weight: bold;
        }

        .event-date {
            font-size: 16px;
            color: #555;
        }

        .event-location {
            font-size: 16px;
        }

        .ticket-number {
            margin-top: 20px;
            font-size: 18px;
        }

        .barcode {
            margin-top: 20px;
        }

        .disclaimer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
<div class="ticket">
    <div class="event-info">
            <h1>Ticket Details for <?php echo $_SESSION['concertName']; ?></h1>
            <p>Date: <?php echo $_SESSION['concertDate']; ?></p>
            <p>Venue: <?php echo $_SESSION['concertVenue']; ?></p>
        <div class="ticket-number">
            Ticket Number: <?php $num = rand(10000000000, 19999999999); echo "<p>$num</p>"; ?>
        </div>
        <div class="barcode">
            <img src="barcode.jpg" alt="Barcode">
        </div>
    </div>
</body>
</html>