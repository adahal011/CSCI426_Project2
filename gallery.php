<!-- Name: Aaditya Ranjan Mahato -->
<!-- CSCI 426 project 1-->
<!-- March 19 2022 -->

<!--php for the footer section -->
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    //connection to the database
    include('connect-foot.php');
    $FName = $_POST['full_name'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];

    //query to insert
    $query = "INSERT INTO newsletter(FName, email, pnumber) VALUE ('$FName', '$email', '$pnumber')";
    //execute and get back
    mysqli_query($conn, $query);
    //wait dialog to show the submission is done.
    sleep(2);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery |Sun Rise Resort</title>
    <link rel="stylesheet" type="text/css" href="home.css" />
    <!-- <link rel="stylesheet" type="text/css" href="styles.css" /> -->
    <linkf
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://use.fontawesome.com/48fd6aabf7.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  </head>
  <body style="background-color: black; font-family: 'Lobster', cursive; color: darkseagreen;">
    <!-- first is navigation bar -->

    <!-- After navigation, we first will Display gallery Title -->

    <!-- navigation bar section -->


    <header>
      <!--Navigation bar at top-->
      <div class="navigate">
      <!--For Logo creation-->
      <div class="logo"><h1>SUN</h1><h2>RISE</h2></h1></br><p><h3>YOUR DREAMY RESORT</p></h3></div>
    <div class="content">
        <!--Navigation items in the form of list-->
        <li> <a href ="index.html" >Home</li></a></li>
        <li> <a href ="AboutUS.php" >About Us</li></a></li>
        <li> <a href ="gallery.php">Gallery</li></a></li>
        <li> <a href ="ContactUs.php">Contact Us</li></a></li>
    </div>
    </header>

    <h1 class="galleryTitle">Our Gallery</h1>
    <!-- navigation bar section ends -->

    <!-- room section for cell of each rooms starts -->
    

    <!-- section for rooms ends -->



    <!-- fitness pictures -->
    <div class="Fitness">
      <h2 class="galleryh2">Health is Wealth!</h2>
      <img class="HealthImg" src="images/fitness.webp" alt="" height="700" />
    </div>

    <!-- spa gallery -->
    <div class="Spa">
      <h2 class="galleryh2">Purify your body and mind</h2>
      <div class="SpaPic">
        <img src="images/Spa0.webp" alt="" />
        <img src="images/spa1.jpeg" alt="" />
        <img src="images/spa2.jpeg" alt="" / >
      </div>
    </div>

    <!-- spa pic ends -->
    <!-- working of pool gallery starts -->
    <div class="Pool">
      <h2 class="galleryh2">Ready to dive in?</h2>
      <!-- Gallery for pool-->
      <div class="poolPic">
        <img src="images/pool0.webp" alt="" />
        <img src="images/pool1.jpeg" alt="" />
        <img src="images/pool2.jpeg" alt="" / >
      </div>
    </div>

    <div class="Tennis">
      <h2 class="galleryh2">Don't forget, we also got Tennis Court</h2>
      <!-- Gallery for Tennis Court-->
      <div class="tennisPic">
        <img src="images/tennis2.jpeg" alt="" />
        <img src="images/tennis1.jpeg" alt="" />
        <img src="images/tennis0.jpeg" alt="" / >
      </div>
    </div>
    <div class="Beach">
      <!-- gallery for Beach -->

      <h2 class="galleryh2">We are right between land and sea</h2>
      <!-- Gallery for Tennis Court-->
      <div class="beachPic">
        <img src="images/beach2.jpeg" alt="" />
        <img src="images/beach1.jpeg" alt="" />
        <img src="images/beach0.jpeg" alt="" / >
      </div>
    </div>
    <div class="Shops">
      <h2 class="galleryh2">Take Suvenior for Someone Special</h2>
      <!-- Gallery for Tennis Court-->
      <div class="shopPic">
        <img src="images/shop2.jpg" alt="" />
        <img src="images/shop1.jpeg" alt="" />
        <img src="images/shop0.jpeg" alt="" / >
      </div>
    </div>

    <!-- corrousal for shop -->
    <div class="Valet">
      <h2 class="galleryh2">Park your ride safely with our valet service</h2>
      <!-- Gallery for Tennis Court-->
      <div class="valetPic">
        <img src="images/valet0.webp" alt="" />
        <img src="images/valet1.webp" alt="" />
        <img src="images/valet2.jpeg" alt="" / >
      </div>
    </div>

    <!-- corrousal for valet -->
    <div class="Arcade">
      <h2 class="galleryh2">Children also need to enjoy!</h2>
      <!-- Gallery for Tennis Court-->
      <div class="arcadePic">
        <img src="images/arcade0.jpeg" alt="" />
        <img src="images/arcade1.jpeg" alt="" />
        <img src="images/arcade2.png" alt="" / >
      </div>
    </div>

    <!-- corrousal for arcade -->


<!--Footer Element
  Worked By: Abhishek Dahal;
  Date: 03/25/2022;
-->
    <div class = "foot">
        <div class = "footer-heading 1">
          <h2> Links </h2>
          <a href = "index.html">Home <i class="fa fa-home" aria-hidden="true"></i></a>
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

        <div class="newsletter-head">
        <h2>Join Our Newsletter</h2> </br><br>
        <form method="POST">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="tel" name="pnumber" id="pnumber" maxlength="12" placeholder="Phone Number" required><br>
            <button type="submit" id = "Join">Join Newsletter</button>
            <div class = "modal_container" id="modal_container">
            <div class = "modal">
                <h2> Thank you for joining Our NewsLetter</h2><br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
                <button id ="close">Close</button>
            </div>
            </div>
        </form>
        </div>
    </div>
</body>

    <script>
        const Join = document.getElementById('Join');
        const modal_container = document.getElementById('modal_container');
        const close = document.getElementById('close');

        Join.addEventListener('click', () => {
            modal_container.classList.add('show');
        });

        close.addEventListener('click', () => {
             modal_container.classList.remove('show');
        });
    </script>
    <script>
        var tele = document.querySelector('#pnumber');

        tele.addEventListener('keyup', function(e){
            if (event.key != 'Backspace' && (tele.value.length === 3 || tele.value.length === 7)){
            tele.value += '-';
         }
         });
    </script>
    <noscript>Your browser does not support JavaScript!</noscript>
</html>
