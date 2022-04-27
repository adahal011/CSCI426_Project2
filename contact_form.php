
<!--ContactUS Element
  Worked By: Abhishek Dahal;
  Date: 04/25/2022;
-->

<?php 
//showing how to work with the post method
if($_SERVER['REQUEST_METHOD'] == "POST"){

    //ensuring connection is done.
    include('contact_connect.php');

    //declaration of the varibales.
    $FName = $_POST['full_name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    //query for the sql to insert the data taken from the user.
    $query = "INSERT INTO CommentTable(full_name, email, comment) VALUE ('$FName', '$email', '$comment')";

    //executing the query with the connection file. Ensures the connection is good.
    mysqli_query($connection, $query);

    //This takes user back to the comment page.
    header("Location: ContactUs.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <p></p> <!-- This is here to display the message or alter if the html file cannot do it.-->
</body>
        <script>
        function succesfull(){
             alert("Thank you for your comment. We hope you enjoyed your stay."); // prompt to show the comment is taken into cosideration
        }
    </script>
</html>

<!--End of the php document for submission of the comment -->
