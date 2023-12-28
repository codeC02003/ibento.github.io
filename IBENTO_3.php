<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <meta http-equiv="X-UA-Compaitable" content="IE-edge">
        <meta name="viewport" content=""width=device-width, initial-scale="1.0">
        <title>IBENTO</title>
        <style>
::-webkit-scrollbar{
    width:7px;
}

::-webkit-scrollbar-thumb{
    background: rgb(255, 255, 255);
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}

body{
    background:black;
    min-height: 100vh;
    overflow-x: hidden;
}


.header{
    top:0;
    left:0;
    position: absolute;
    width: 100%;
    padding:30px 100px;
    display:flex;
    justify-content: flex-start;
    align-items: center;
    z-index: 100;
}

.nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.7); 
            color: white;
            z-index: 1000;
            display: flex;
            justify-content: center; 
            align-items: center;
            padding: 20px 0;
        }

.nav a{
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


.parallax{
    position: relative;
    display: flex;
    justify-content: center;
    align-items:center;
    height: 75vh;
}

#text{
    position:absolute;
    font-size: 5em;
    color:white;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    font-family: 'Pacifico', cursive;
  }

.parallax img {
    top:0;
    left:0;
    position: absolute;
    width: 100%;
    pointer-events:none;

}

 .search{
    width: 330px;
    margin-top: 20px;
    margin-left: 1150px;
    color:white;
}

.sec{
    position:relative;
    background:none;
    width: 100%;
    margin-top: 180px;
}

.slide-container{
    margin:0;
    padding: 0;
    width:100%;
    height: 100vh;
    display: flex;
    justify-content:center;
    align-items:  center;
}
.slider {
            width: 100%;
            height: 750px;
            overflow: hidden;
            position: relative;
            }
.slides{
    width:500%;
    height: 100%;
    display:flex;
}

.slides input{
    display:none;
}

.slide{
    width:20%;
    height: 100%;
    transition:2s;
    position: relative;
}


.slide img{
    width:100%;
    height: 100%;
    object-fit: cover;
}

.navigation-manual{
    position: absolute;
    width: 100%;
    display:flex;
    justify-content:center;
    margin-bottom:20px;
    z-index: 10;
}

.manual-btn{
    border: 2px solid white;
    padding:5px;
    cursor: pointer;
    transition:1s;
    background: transparent;
    margin: 0 10px;
}

.manual-btn:not(:last-child){
    margin-right: 0;
}

.manual-btn:hover{
    background: whitesmoke;
    color: #0b0817;
}

#radio1:checked~.first{
    margin-left:0;
}
#radio2:checked~.first{
    margin-left:-20%;
}
#radio3:checked~.first{
    margin-left:-40%;
}

.navigation-auto{
    position:absolute;
    display: flex;
    width: 100%;
    justify-content:center;
    margin-top:600px;
    z-index: 10;
}

.navigation-auto div{
    border: 2px solid white;
    padding: 5px;
    transition: 1s;
    background: transparent;
    margin: 0 10px;
}

.navigation-auto div:not(:last-child){
    margin-right: 0;
}

#radio1:checked~.navigation-auto .auto-btn1{
    background: whitesmoke;
    color: #0b0817;
}
#radio2:checked~.navigation-auto .auto-btn2{
    background: whitesmoke;
    color: #0b0817;
}
#radio3:checked~.navigation-auto .auto-btn3{
    background: whitesmoke;
    color: #0b0817;
}

h2{
			margin-top: 30px;
			margin-bottom: 20px;
			text-align: center;
}
h1{
      margin-top: 30px;
			margin-bottom: 20px;
      color:whitesmoke;
      text-align: center;
}

    .container {
      color:white;
			width:100%;
			margin: 0 auto;
			padding: 60px;
		}

		h2 {
			margin-top: 30px;
			margin-bottom: 20px;
			text-align: center;
		}

		.about {
			display: flex;
			align-items: center;
			justify-content: center;
			margin-top: 50px;
		}

		.about img {
			width: 200px;
			height: 200px;
			border-radius: 50%;
			margin-right: 20px;
		}

		.about p {
			font-size: 18px;
			line-height: 1.5;
			margin: 0;
		}
    footer {
  background-color: #2a2a2a;
  color: #fff;
  padding: 40px 0;
  font-family: Arial, sans-serif;
  font-size: 16px;
  text-align: center;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer-column {
  width: 45%;
  padding: 10px;
  box-sizing: border-box;
}

h3 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #ffcb74;
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
  color: #d4d4d4;
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
  justify-content: center;
  align-items: center;
}

.social a {
  display: inline-block;
  margin: 0 15px;
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
            <nav class="nav">     
                <a href="#">HOME</a>
                <a href="signin.php">LOGIN</a>
                <a href="signin.php">BOOK TICKETS</a>
                <a href="#about">ABOUT</a>
                <a href="signin.php">CONTACT</a>
              </nav>
      </header>   
    <section class="parallax">
               <img src="bg1.jpg" id="CROWD">
               <h2 id="text">IBENTO</h2>
               <script src="script_1.js" ></script> 
     </section>
    <script src="script.js"></script>
    <section class="sec">
        <div class="slide-container">
            <div class="slider">
            <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            
            
            <div class="slide first">
                <a href="#"><img src="AS.jpg" alt="">
            </a></div>
            
            <div class="slide">
                <a href="#">
                <img src="zaed.jpg" alt="">
            </a></div>
                    
            <div class="slide">
                <a href="#"></a><img src="ED.png" alt="">
            </a></div>
             
            <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                </div>
            </div>
            </div>    
        </section>
        <br>
        <br>
          <br>
          <br>
          <div class="container">
            <h2>About Us</h2>
            <div class="about" ID="about">
              <img src="IMG-6041.jpg" alt="Team Photo">
              <p>This Website will contain all the info of different events of different colleges.
                Every college student council may enroll their team in this website.
                Broadcasting the news about their upcoming events so that may help
                getting them amazing response from the crowd. They may also get
                recommendations from the same which may help them improvise their
                management in that particular event for the next time. It may also help in
                getting sponsors. The site will also be able to take reviews for that event.</p>
            </div>
          </div>
          
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