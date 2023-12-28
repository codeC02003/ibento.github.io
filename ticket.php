<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compaitable" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBENTO</title>
    <style>
        ::-webkit-scrollbar{
    width:12px;
}

::-webkit-scrollbar-thumb{
    background: rgb(255, 255, 255);
    border-radius: 6px;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}

body{
  background-image: url("bg1.jpg");
			background-size: cover;
    min-height: 100vh;
    overflow-x: hidden;
}


.header {
            top: 0;
            left: 0;
            position: relative;
            width: 100%;
            padding: 30px 100px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }


.nav{
    margin-right: 390px;
}

.nav a{
    float:right;
    color: white;
    margin: 10 15px;
    padding: 15px 40px;
    text-decoration: none;
    font-weight: 600;
}

 .nav a:hover {
    background: white;
    color:black;
    transition:0.5s;
 }

#text {
  font-family: 'Pacifico', cursive;
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 2em;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

 .search{
    width: 330px;
    margin-top: 20px;
    margin-left: 1150px;
    color:white;
}

.srch{
    width: 300px;
    height: 32px;
    background: transparent;
    border: 1px solid white;
    color:white;
    font-weight: 600;
}

.search button {
  background-color: #ffffff;
  color: rgb(11, 6, 49);
  border: none;
  border-radius: 25px;
  padding: 0.5rem 1rem;
  margin-left: -4.3rem;
  cursor: pointer;
}

.search button:hover {
  background-color: rgb(3, 12, 42);
  color: white;
}

.sec{
    position:relative;
    background:none;
    width:100%;
}
.concert-cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            margin-bottom: 20px;
        }

.sec {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
    margin-bottom: 20px;
}

        .concert-card {
    position: relative;
    width: calc(33.33% - 20px);
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    padding: 20px;
    margin-bottom: 20px;
}

.book-ticket-button {
    background-color: black;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    position: absolute;
    bottom: 10px; 
    right: 10px; 
    transition: background-color 0.3s, color 0.3s;
    text-decoration:none;
}
.concert-card img {
    width: 100%;
    height: 300px; 
    object-fit: cover;
    border-radius: 15px; 
}
        
.book-ticket-button:hover {
    background-color: whitesmoke; 
    color: black;
}
.contact-info {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.contact-info p {
  margin: 5px 0;
}

.contact-info a {
  color: #ffcb74;
}


footer {
  background-color: #333;
  padding: 40px 0;
  font-family: Arial, sans-serif;
  font-size: 16px;
  color: #fff;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer-column {
  width: 30%;
  padding: 10px;
  box-sizing: border-box;
}

h3 {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 20px;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

li {
  margin-bottom: 10px;
}

a {
  text-decoration: none;
  color: #999;
  transition: color 0.3s ease-in-out;
}

a:hover {
  color: #ffcb74;
}

.quick-links {
  display: flex;
  justify-content: space-between;
}

.social {
  display: flex;
}

.social a {
  display: inline-block;
  margin: 0 10px;
  border-radius: 50%;
  overflow: hidden;
  width: 40px;
  height: 40px;
  transition: all 0.3s ease;
}

.social a:hover {
  transform: scale(1.2);
}

.social img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

    </style>
</head>
<body>
    <header>
        <h2 id="text">IBENTO</h2>
        <nav class="nav">
            <a href="contact.php">CONTACT</a>
            <a href="#about">ABOUT</a>
            <a href="IBENTO_4.php">HOME</a>
        </nav>
    </header>
    <section class="sec">
        <div class="concert-card">
            <img src="Weeknd.jpg" alt="Concert 1">
            <h3>Weeknd</h3>
            <p>Date: March 1, 2023</p>
            <p>Location: Venue 1</p>
            <p>Price: $30</p>
            <a href="booking.php?concert=Weeknd" class="book-ticket-button">BUY TICKET</a>
        </div>
        <div class="concert-card">
            <img src="taylorswift.jpg" alt="Concert 2">
            <h3>Taylor Swift</h3>
            <p>Date: March 15, 2023</p>
            <p>Location: Venue 2</p>
            <p>Price: $40</p>
            <a href="booking.php?concert=Taylor Swift" class="book-ticket-button">BUY TICKET</a>
        </div>
        <div class="concert-card">
            <img src="Therollingstones.jpg" alt="Concert 3">
            <h3>The Rollingstones</h3>
            <p>Date: March 28, 2023</p>
            <p>Location: Venue 3</p>
            <p>Price: $35</p>
            <a href="booking.php?concert=The Rollingstones" class="book-ticket-button">BUY TICKET</a>
        </div>
        <div class="concert-card">
                <img src="Milesdavis.jpg" alt="Concert 4">
                <h3>Miles Davis</h3>
                <p>Date: March 4, 2023</p>
                <p>Location: Venue 4</p>
                <p>Price: $35</p>
                <a href="booking.php?concert=Miles Davis" class="book-ticket-button">BUY TICKET</a>
            </div>
            </div>
            <div class="concert-card">
                <img src="ledzheplin.png" alt="Concert 5">
                <h3>Led Zheplin</h3>
                <p>Date: March 25, 2023</p>
                <p>Location: Venue 5</p>
                <p>Price: $35</p>
                <a href="booking.php?concert=Led Zheplin" class="book-ticket-button">BUY TICKET</a>
            </div>
            </div>
            <div class="concert-card">
                <img src="JohnColtrane.jpg" alt="Concert 6">
                <h3>John Coltrane</h3>
                <p>Date: March 30, 2023</p>
                <p>Location: Venue 6</p>
                <p>Price: $35</p>
                <a href="booking.php?concert=John Coltrane" class="book-ticket-button">BUY TICKET</a>
            </div>
    </section>
    <footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3>Follow Us:</h3>
            <div class="social">
              <a href="https://www.instagram.com/"><b><img src="insta.png"></b></a>
              <a href="https://www.facebook.com/"><img src="facebook_logo_icon_143786.png"></a>
              <a href="https://twitter.com/"><img src="social_Twitter_38.png"></a>
            </div>
        </div>
        <div class="footer-column">
            <h3>Contact Us:</h3>
            <p>Email: chinmaymhatre02003@gmail.com</p>
            <p>Phone: +1 (123) 456-7890</p>
        </div>
    </div>
</footer>

</body>
</html>
