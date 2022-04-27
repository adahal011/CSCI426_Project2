<!--Name: Praneetha Gobburi
  Most Recent Update: 4-25-2022
  Start Date: 3-17-2022
  Project Name: Sun Rise Resorts website
  -------ABOUT US PAGE------------->
<!DOCTYPE html>

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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <script src="https://use.fontawesome.com/48fd6aabf7.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <noscript>Your browser does not support JavaScript!</noscript>

    <!--Java Script code for the slide show when the user hovers over the food drinks image and when the stop hovering it stops-->
    <script type="text/javascript">
        var backgroundImg = ["images/burgers.jpg", "images/seafood.jpg", "images/cafe.jpg", "images/drinks.jpg"];
        var i = 0;
        var myTimeout;
        function changeImage(i) {
            if (i >= backgroundImg.length) {
                i = 0;
            }
            document.getElementById('services-col3').style.border = "5px solid white";
            document.getElementById('services-col3').style.transition = "1s";
            document.getElementById('services-col3').style.backgroundImage = "linear-gradient(rgba(4,9,30,0.5), rgba(4,9,30,0.5)), url('" + backgroundImg[i] + "')";
            i = i + 1;
            myTimeout = setTimeout(function () {
                changeImage(i);
            }, 2000);
        }

        //setInterval(changeImage,2000);

        function out() {
            clearTimeout(myTimeout);
            document.getElementById('services-col3').style.border = "none";
            document.getElementById('services-col3').style.transition = "none";
            document.getElementById('services-col3').style.backgroundImage = "linear-gradient(rgba(4,9,30,0.5), rgba(4,9,30,0.5)), url(images/bar.jpg)";

        }
    </script>

</head>
<body>
    <header>
        <!--Navigation bar at top-->
        <div class="navigate">
            <!--For Logo creation-->
            <div class="logo"><h1>SUN</h1><h2>RISE</h2></h1></br><p><h3>YOUR DREAMY RESORT</p></h3></div>
        <div class="content">
        <!--Navigation items in the form of list-->
        <li> <a href ="index.php" >Home</li></a></li>
        <li> <a href ="AboutUS.php" >About Us</li></a></li>
        <li> <a href ="gallery.php">Gallery</li></a></li>
        <li> <a href ="ContactUs.php">Contact Us</li></a></li>
        </div>
    </header>
    <section class="header">
        <div class="text-box">
            <h1>About Us</h1>
            <p>
                Learn a little more about Sun Rise Resorts. Please take the time to learn about our mission, the services, and the staff at our resort.<br>
                We look forward to meeting you!
            </p>
            <a href="#mission" class="mission_btn">Mission</a>
            <a href="#services" class="services_btn">Services</a>
            <a href="#staff" class="staff_btn">Staff</a>
        </div>
    </section>

    <!---Missions/history/goals-->
    <!--have the paragraph on oneside and the picture on the other side-->

    <section class="mission">
        <a name="mission"></a>
        <div class="row">
            <div class="mission-col">
                <h1>Sun Rise</h1>
                <img src="images/resort2.jpg" alt="pic of resort" />
                <p>
                    Sun Rise Resorts was founded in 2000. Our founder William Lanmark was exploring this very location and stumbled open the most beautiful view. Lanmark instantly wanted to make it safe heaven. His visions went farther than that and we ended up with the Sun Rise resorts.
                    <br><br>
                    Since then the resort has grown and has expanded. With the expansion, we have also updated our services to accommodate our customers. It is our mission to uphold the expectation set by our founder to make this place a worry-free, relaxing vacation spot for all.
                </p>
                <p>
                    Our resort is a place for the entire family. We provide activities for adults and kids. Our goal has been and still is our customers' enjoyment. We hope you have a  worry-free and fun time here.
                </p>

            </div>

        </div>
    </section>


    <!--SERVICES-->
    <!-- have small boxes in oder for different kind of amneties and servies offered-->
    <!-- have pictures in them that corrlate with the point-->
    <section class="services">
        <a name="services"></a>
        <h1>Services</h1>
        <p>At Sun Rise Resorts we have many services that are available for our customers to make their stay comfortable. Services include:        </p>
        </p>
        <div class="row">
            <div class="services-col1">
                <h3>Physical Activities</h3>
                <p>Sun Rise has a fitness center, arcade room, tennis & golf courts for those who want to work up a sweat.</p>
                <!--Change the reference here-->
                <a href="gallery.html" class="mission_btn">LearnMore</a>
            </div>
            <div class="services-col2">
                <h3>Relaxation</h3>
                <p>Relax and unwind at our spa & salon. Enjoy a lazy day at the beach, or go shopping at our local shops.</p>
                <!--Change the reference here-->
                <a href="gallery.html" class="mission_btn">LearnMore</a>
            </div>
            <div class="services-col3" id="services-col3" onmouseenter="changeImage(0)" onmouseleave="out()">
                <h3>Food/Drinks</h3>
                <p>Have a drink at our bar or go to one of the many restaurants that are now available within walking distance.</p>
                <ul>
                    <p>Restaurents include:</p>
                    <li>SunBeam Cafe & <br>Restaurants</li>
                    <li>TastyBurgers</li>
                    <li>Soleil's Seafood</li>
                </ul>
                <!--Change the reference here-->
                <a href="gallery.html" class="mission_btn">LearnMore</a>
            </div>
            <div class="services-col4">
                <h3>Others</h3>
                <p>Other services include valet, 24-hour room services, and 24-hour concierge service.</p>
                <!--Change the reference here-->
                <a href="gallery.html" class="mission_btn">LearnMore</a>
            </div>
        </div>

    </section>

    <!--Staff-->
    <!--have a 2 column and as many rows you want of staff members*/-->
    <section class="staff">
        <a name="staff"></a>
        <h1>Meet our Staff</h1>
        <p>Faculty at Sun Rise work hard to make your stay comfortable, learn a little about them and trust them to give you the best services available.</p>
        <div class="row">
            <div class="staff_col">
                <!--Insert random lady here-->
                <img src="images/Alexis.jpg" alt="A picture of manager Alexis">
                <div>
                    <q><em>Hi everyone! I am Alexis Lane. I am a manager at Sun Rise. I have been at Sun Rise Resorts for almost 10 years. The best part of working here is seeing people smiling and enjoying themselves.</em></q>
                    <h3>Alexis Lane</h3>
                </div>
            </div>
            <div class="staff_col">
                <!--Insert random lady here-->
                <img src="images/david.jpg" alt="picture of employee david">
                <div>
                    <q><em>Hello, I am David Moss. I am an employee at Sun Rise. I have been working at Sun Rise resorts since I was 18, and I am now 20. So I have been here for almost 2 years now, and it is an amazing place to work. The community is great and we watch out for each other like family. I hope you will join us here.</em></q>
                    <h3>David Moss</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="staff_col">
                <!--Insert random lady here-->
                <img src="images/mar.jpg" alt="picture of employee Marisa">
                <div>
                    <q><em>Hello, I am Marisa O'Neil. I am head of the room service department at Sun Rise. I have been at Sun Rise for 20 years, and it is such an experience. It's crazy sometimes, but I enjoy helping people and making their day. It's my job to make sure you are comfortable so give room service a call if you need anything!</em></q>
                    <h3>Marisa O'Neil</h3>
                </div>
            </div>
            <div class="staff_col">
                <!--Insert random lady here-->
                <img src="images/ashlen.jpg" alt="picture of employee Ashlen">
                <div>
                    <q><em>Hello everyone! I am Ashlen Nicher, I am a front desk assistant at Sun Rise. I have been working at Sun Rise resorts for about 5 months. I am the newest member of the resort, and it has been an adventure working here. The people are so kind, and it's so fun. But nothing beats the view at Sun Rise. It is so beautiful. It's something you have to see for yourself so visit us here! I will make sure you get everything running smoothly.</em></q>
                    <h3>Ashlen Nicher</h3>
                </div>
            </div>
        </div>

        <div class="more_staff">
            <a href="more_staff.php" class="more_staff_btn">More Staff</a>
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

    tele.addEventListener('keyup', function (e) {
        if (event.key != 'Backspace' && (tele.value.length === 3 || tele.value.length === 7)) {
            tele.value += '-';
        }
    });
</script>
</html>
