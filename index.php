

<!DOCTYPE html>
<html lang="en">
<head>
<!--
    Author:Milan Khanal // Abhishek Dahal
    Date:3/21/2022  // 03/25/2022
    Filename:Project 1 
-->
	
	<!--place meta tags before before title tag-->		
	<meta name="author" content="Milan Khanal" />
	<meta name="description" content="Hotel Website" />
	<meta name="keywords" content="web programming, html, css, web design" />
		
	<meta charset="UTF-8" />
  
	
	<!--to adjust the viewport -- user's visible area of web page-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="Testomonials.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Limelight&family=Lobster&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/48fd6aabf7.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  
  <title>SUN RISE HOTEL</title>
  </head>
<body>
	<header>
		<!--Navigation bar at top-->
	<div class="navigate">
		<!--For Logo creation-->
	<div class="logo"><h1>SUN</h1><h2>RISE</h2></h1></br><p><h3>YOUR DREAMY RESORT</p></h3></div>
	<div class="content">
		<!--Navigation items in the form of list-->
        <div class="content">
        <!--Navigation items in the form of list-->
        <li> <a href ="index.php" >Home</li></a></li>
        <li> <a href ="AboutUS.php" >About Us</li></a></li>
        <li> <a href ="gallery.php">Gallery</li></a></li>
        <li> <a href ="ContactUs.php">Contact Us</li></a></li>
        </div>
  </div>
  </header>
<div class="box">
<!--Background image fade-->
<div class="Slide fade">
  <img src="images/1.jpeg" style="width:100%">
  
</div>

<div class="Slide fade">
  <img src="images/spa.jpeg" style="width:100%">
  
</div>

<div class="Slide fade">
 <img src="images/gym.jpeg" style="width:100%">
  
</div>

</div>
<br>
<script>
let count = 0;
Animation();
function Animation() {
  let i;
  let running = document.getElementsByClassName("Slide");
  for (i = 0; i < running.length; i++) {
    running[i].style.display = "none";
}
count++;
  if (count > running.length) {count = 1}    
  running[count-1].style.display = "block";  
  setTimeout(Animation, 3000);
}
</script>
<noscript>Your browser does not support JavaScript!</noscript>
<div class="title">
    		<h1>SUN</h1><h4> RISE </h4>
    		<h2>STAY WITH FRIENDS & FAMILIES </br> COME & ENJOY PRECIOUS MOMENT WITH US</h2>
    	</div>
</div>
<section class="roomPic" style="background-color: black; color: #306b30">
  <!-- first cell -->
  <div class="RoomCardcontainer">
    <h2 class="galleryh2">Single Bed Room</h2>
    <p class="card-caption">If you are single and dont wanna mingle</p>
    <div class="card" style="width: 400px">
      <img
        class="RoomImg"
        src="images/singleRoom.jpeg"
        alt="Card image"
        style="width: 100%"
      />
      <div class="card-body">
        <h4 class="card-title">Twin bed Room</h4>
        <p class="card-text">
          Price: $180.00 <br />
          AC, Heater, TV, and more!
        </p>
        <a href="roomInfo.php#twin" class="btn btn-primary">More info?</a>
      </div>
    </div>
  </div>

  <!-- first cell ends -->

  <!-- second cell -->

  <div class="RoomCardcontainer">
    <h2 class="galleryh2">Studio Bed Room</h2>
    <p class="card-caption">Work Privately in your space</p>
    <div class="card" style="width: 400px">
      <img
        class="RoomImg"
        src="images/studioRoom.jpeg"
        alt="Card image"
        style="width: 100%"
      />
      <div class="card-body">
        <h4 class="card-title">Studio Room</h4>
        <p class="card-text">
          Price: $300.00 <br />
          Kitchen, Office, and your professional Spaces
        </p>
        <a href="roomInfo.php#studio" class="btn btn-primary">More info?</a>
      </div>
    </div>
  </div>

  <!-- second cell ends -->

  <!-- third cell for room -->

  <div class="RoomCardcontainer">
    <h2 class="galleryh2">Double Bed Room</h2>
    <p class="card-caption" >With Family? Need more Space?</p>
    <div class="card" style="width: 400px">
      <img
        class="RoomImg"
        src="images/doubleRoomjpeg.jpeg"
        alt="Card image"
        style="width: 100%"
      />
      <div class="card-body">
        <h4 class="card-title">Double Bed Room</h4>
        <p class="card-text">
          Price: $255.00 <br />
          Two queen beds and every facilities you
        </p>
        <a href="roomInfo.php#double" class="btn btn-primary">More info?</a>
      </div>
    </div>
  </div>

  <!-- thid cell for room ends -->

  <!-- fourth cell -->
  <br />
  <div class="RoomCardcontainer">
    <h2 class="galleryh2">King Bed Room</h2>
    <p class="card-caption">Be King and Live in King</p>
    <div class="card" style="width: 400px">
      <img
        class="RoomImg"
        src="images/kingRoom.jpeg"
        alt="Card image"
        style="width: 100%"
      />
      <div class="card-body">
        <h4 class="card-title">King Sized Room</h4>
        <p class="card-text">
          Price: $250.00 <br />
          King bed and Everything else you need
        </p>
        <a href="roomInfo.php#king" class="btn btn-primary">More info?</a>
      </div>
    </div>
  </div>

  <!-- fourth room cell ends -->
</section>

<!--Customer Review Section ( Needs Title ) -->
<section class = "customers" id = "customers">
        <div class = "sec-width">
            <div class = "title">
                <!--- <h2>Customer Reviews</h2>  Need to adjust this-->
            </div>
            <div class = "customers-container">
                <div class = "customer"> <!--customer comment-->
                    <h3>We Loved it</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src = "images/iron.jpg" alt = "customer image"></br>
                    <span>Customer Name</span>
                </div>
                <div class = "customer">
                    <h3>Comfortable Living</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src = "images/thor.jpg" alt = "customer image"></br>
                    <span>Customer Name</span>
                </div>
                <div class = "customer">
                    <h3>Nice Place</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src = "images/captain.jpg" alt = "customer image"></br>
                    <span>Customer Name</span>
                </div>
            </div>
        </div>
</section>

<!--Footer Element
  Worked By: Abhishek Dahal;
  Date: 03/25/2022;
-->
    <div class = "foot">
        <div class = "footer-heading 1">
          <h2> Links </h2>
          <a href = "index.php">Home <i class="fa fa-home" aria-hidden="true"></i></a>
          <a href = "AboutUS.php">About Us <i class="fa fa-info" aria-hidden="true"></i></a>
          <a href = "gallery.php">Gallery <i class="fa fa-picture-o" aria-hidden="true"></i></a>
          <a href = "ContactUs.php">Contact Us <i class="fa fa-phone-square" aria-hidden="true"></i></a>
        </div>
          <div class = "footer-heading 2">
          <h2> Social Media</h2>
          <a href = "https://www.blogger.com/" target="blank" >Blog <i class="fa fa-rss" aria-hidden="true"></i> </a>
          <a href = "https://www.facebook.com/" target="blank" >Facebook <i class="fa fa-facebook" aria-hidden="true"></i> </a>
          <a href = "https://twitter.com/?lang=en" target="blank" >Twitter <i class="fa fa-twitter" aria-hidden="true"></i> </a>
          <a href = "https://instagram.com/"target="blank" >Instagram <i class="fa fa-instagram" aria-hidden="true"></i> </a>
        </div>
        <div id="map">
          <h2> Map </h2>
          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2025794.1411682824!2d79.65951000240919!3d7.395381359498745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afad902ff15d689%3A0xc535bb42f68fac66!2sHotel%20Sunrise!5e0!3m2!1sen!2sus!4v1648404899109!5m2!1sen!2sus" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </div>
</body>
</html>
