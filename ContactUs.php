<!DOCTYPE html>

<!--ContactUS Element
  Worked By: Abhishek Dahal;
  Date: 03/25/2022;
-->

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

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="contactCSS.css">
    <script src="https://use.fontawesome.com/48fd6aabf7.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<body>
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
    </div>
    </header>
    <!-- Start of Content For the Contact Us Page -->
    <section class = "contact">
        <div class = "content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p><br>
        </div>
        <div class="mainInfo">
            <div class = "contactInfo">
                <div class = "box">
                    <div class="icon">
                    <i class="fa fa-map" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Passikudah<br>30410<br>Sri Lanka</p>
                    </div>
                </div>
                <div class = "box">
                    <div class="icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone Number</h3>
                        <p>+9-465-205-8865<br>+9-234-789-1234</p>
                    </div>
                </div>
                <div class = "box">
                    <div class="icon">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email Address</h3>
                        <p>example@hotel.com</p>
                    </div>
                </div>
            </div>
            <!--Form to leave a Review-->
            <div class="comment-box">
                <form action="contact_form.php" method = "POST">
                    <br><h2>Leave us your Feedback</h2><br>
                    <input type="text" name="full_name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <textarea name= "comment" placeholder="Type Your Comment" required> </textarea>
                    <button type="submit" onClick = succesfull()>Submit Comment</button><br><br>
                </form>
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
        function succesfull(){
             alert("Thank you for your comment. We hope you enjoyed your stay.");
        }
    </script>
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
