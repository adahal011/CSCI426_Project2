<?php
// first we make connection with the database
include("connection.php");


//if user enter any information in the form, we will instantiate the variable with these value
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $room = $_POST['room'];
  $date = $_POST['date'];
  //now we got every value, we will write them into our database
  $query = "insert into SunriseBooking(username, email, roomType, date) values ('$username', '$email', '$room','$date')";
  mysqli_query($con , $query); //this statement will run query into the database

  header("Location: index.php"); //after query is complete, home page will be loaded
  die; //we will close every process now
}

?>


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
    <title>Room Info</title>
    <!-- styles import -->
    <link rel="stylesheet" type="text/css" href="comment.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="home.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />


  </head>
  <body class="infoBody">
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

    <!-- this is section for twin bed room -->
    <section  id="twin" class="product-details">
      <div class="product-image">
        <img
          src="Images/singleRoom.jpeg"
          alt="singleroom"
          style="display: none"
          class="detail-view"
        />
        <div
          class="detail-view"
          style="background-image: url(Images/singleRoom.jpeg)"
        ></div>
      </div>
      <div class="product-description">
        <small>HOT Deal!!!</small>
        <h2>Single Bed Room</h2>
        <p class="prod-short-desc">
          Don't think alot if you are looking for single bed
        </p>
        <div class="product-rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-alt"></i>
        </div>
        <p class="product-price">$: <span>180</span>.00</p>
        <p class="available"><b>Availability:</b> 2</p>
        <div class="qty-btn">
          <!-- <p>Quantity</p>
          <input type="number" value="1" /> -->
          <button type="button"
          
          data-toggle="modal"
          data-target="#exampleModal0"class="prod-cart-btn">Click Here to book</button>
          <div
              class="modal fade"
              id="exampleModal0"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
          >
          <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Your Information: </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <!-- booking form -->
        <form action="" method="post">
        <label for="username" >Please enter your name</label>
        <input type="text" name="username" required/><br>
        <label for="email">Please enter your email:</label>
        <input type="email" name="email" required/><br>
        <select name="room">
          <option value="singleRoom" selected>Single Bed Room</option>
          <option value="studioRoom">Studio Bed Room</option>
          <option value="doubleRoom">Double Bed Room</option>
          <option value="KingRoom">King Bed Room</option>

        </select><br>
        
        <label for="date">Please enter the date</label>
        
        <input type="date" name="date" required><br>
        <br>
        
      <input style="background-color: darkseagreen;" type="submit">
    </form>
        
        </div>
        
        </div>
      </div>
      </div>
    </section>
    <!-- Thsi is section for Studio room -->
    <section id="studio" class="product-details">
        <div class="product-image">
          <img
            src="Images/studioRoom.jpeg"
            alt="singleroom"
            style="display: none"
            class="detail-view"
          />
          <div
            class="detail-view"
            style="background-image: url(Images/studioRoom.jpeg)"
          ></div>
        </div>
        <div class="product-description">
          <small>HOT Deal!!!</small>
          <h2>Studio Room</h2>
          <p class="prod-short-desc">
            This is the best personal space you can wish for <br><br>
            More Perk available for this room: <br>
            -first : You have free valet service<br>
            -second : You have free access to all of our amnities <br>
            
            
          </p>
          <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
          </div>
          <p class="product-price">$: <span>300</span>.00</p>
          <p class="available"><b>Availability:</b> 3</p>
          <div class="qty-btn">
            <!-- <p>Quantity</p>
            <input type="number" value="1" /> -->
            <button type="button"
            
            data-toggle="modal"
            data-target="#exampleModal1"class="prod-cart-btn">Click Here to book</button>
            <div
                class="modal fade"
                id="exampleModal1"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
            <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Your Information: </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          <!-- booking form -->
            <form method="post">
          <label for="username">Please enter your name</label>
          <input type="text" name="username" required/><br>
          <label for="email">Please enter your email:</label>
          <input type="email" name="email" required/><br>
          <select name="room">
          <option value="singleRoom" >Single Bed Room</option>
          <option value="studioRoom" selected>Studio Bed Room</option>
          <option value="doubleRoom">Double Bed Room</option>
          <option value="KingRoom">King Bed Room</option>

        </select><br>
          <label for="date">Please enter the date</label>
          <input type="date" name="date" required><br><br>
        <input style="background-color: darkseagreen;" type="submit">
      </form>
          
          </div>
          
          </div>
        </div>
      </div>
    </div>

            
          </div>
        </div>
      </section>
      <!-- below is room for Double Bed Room -->
      <section id="double" class="product-details">
        <div class="product-image">
          <img
            src="Images/doubleRoomjpeg.jpeg"
            alt="singleroom"
            style="display: none"
            class="detail-view"
          />
          <div
            class="detail-view"
            style="background-image: url(Images/doubleRoomjpeg.jpeg)"
          ></div>
        </div>
        <div class="product-description">
          <small>HOT Deal!!!</small>
          <h2>Double Bed Room</h2>
          <p class="prod-short-desc">
            If you are coming with family, then this is the perfect<br>
            space you can wish for
          </p>
          <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
          </div>
          <p class="product-price">$: <span>255</span>.00</p>
          <p class="available"><b>Availability:</b> 5</p>
          <div class="qty-btn">
            <!-- <p>Quantity</p>
            <input type="number" value="1" /> -->
            <button type="button"
            
            data-toggle="modal"
            data-target="#exampleModal3"class="prod-cart-btn">Click Here to book</button>
            <div
                class="modal fade"
                id="exampleModal3"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
            <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Your Information: </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          <!-- booking form -->
            <form method="post">
          <label for="username">Please enter your name</label>
          <input type="text" name="username" required/><br>
          <label for="email">Please enter your email:</label>
          <input type="emal" name="email" required/><br>
          <select name="room">
          <option value="singleRoom" >Single Bed Room</option>
          <option value="studioRoom">Studio Bed Room</option>
          <option value="doubleRoom" selected>Double Bed Room</option>
          <option value="KingRoom">King Bed Room</option>

        </select><br>
          <label for="date">Please enter the date</label>
          <input type="date" name="date" required><br><br>
        <input style="background-color: darkseagreen;" type="submit">
      </form>
          
          </div>
          
          </div>
        </div>
        </div>
      </section>
      <!-- below is detail for King sized bed -->
      <section id="king" class="product-details">
        <div class="product-image">
          <img
            src="Images/kingRoom.jpeg"
            alt="singleroom"
            style="display: none"
            class="detail-view"
          />
          <div
            class="detail-view"
            style="background-image: url(Images/kingRoom.jpeg)"
          ></div>
        </div>
        <div class="product-description">
          <small>HOT Deal!!!</small>
          <h2>King Bed Room</h2>
          <p class="prod-short-desc">
            Alone? Couple?<br>
            Doesn't, matter.<br>
            Feel like your room is your kingdom <br>and your bed is you palace
          </p>
          <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
          </div>
          <p class="product-price">$: <span>250</span>.00</p>
          <p class="available"><b>Availability:</b> 3</p>
          <div class="qty-btn">
            <!-- <p>Quantity</p>
            <input type="number" value="1" /> -->
            <button type="button"
            
            data-toggle="modal"
            data-target="#exampleModal4"class="prod-cart-btn">Click Here to book</button>
            <div
                class="modal fade"
                id="exampleModal4"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
            <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Your Information: </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          <!-- booking form -->
            <form method="post">
          <label for="username" >Please enter your name</label>
          <input type="text" name="username" required/><br>
          <label for="email">Please enter your email:</label>
          <input type="email" name="email" required/><br>
          <select name="room">
          <option value="singleRoom" >Single Bed Room</option>
          <option value="studioRoom">Studio Bed Room</option>
          <option value="doubleRoom">Double Bed Room</option>
          <option value="KingRoom" selected>King Bed Room</option>

        </select><br>
          <label for="date">Please enter the date</label>
          <input type="date" name="date" required><br><br>
        <input style="background-color: darkseagreen;" type="submit">
      </form>
          
          </div>
          
          </div>
        </div>
        </div>
      </section>

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

    
    <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"
  ></script>

    
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
