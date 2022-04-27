<?php 
//this is the connection page
$dbhost = "localhost";
$username = "root";
$password ="";
$dbname = "Sunrise_DB";
//below statement will run the connection command by entering the authentication information 
if(!$con = mysqli_connect($dbhost, $username, $password, $dbname)){
    die;
}
