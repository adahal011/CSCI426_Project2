

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){

    include('connect-foot.php');
    $FName = $_POST['full_name'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];

    $query = "INSERT INTO newsletter(FName, email, pnumber) VALUE ('$FName', '$email', '$pnumber')";
}
?>

