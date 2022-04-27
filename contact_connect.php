<!--ContactUS Element to establish connection
  Worked By: Abhishek Dahal;
  Date: 04/25/2022;
-->
<?php
    //connecting to the localhost which has username root and has no password.
    $dbhostname = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "Sunrise_DB";  // the sunrise database
    
    //mysqli_connect connects with the database using the provided credentitals and stores everything in $connection for later use.
    $connection = mysqli_connect($dbhostname, $dbUsername, $dbPassword, $dbname);
    if (!$connection)
    {
      echo "Not Connnected to Server";
    }

    if (!mysqli_select_db($connection , 'Sunrise_DB'))
    {
      echo "Not connected to database";
    }
?>

<!-- End of the php document for connecting -->
