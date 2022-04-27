<?php
/*mysql_connect('localhost', 'root','');
//name of database here!!!
mysql_select_db('sunrise');*/
$dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "Sunrise_DB";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);
?>
