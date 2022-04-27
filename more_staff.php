<!--Name: Praneetha Gobburi
File Name: more_staff.php
File Description: This is the index file for the more staff info and members.
It will be connected to aboutus page.
Date created: 4-19-2022
Date modified: 4-25-2022 */-->

<?php
    //take the connection variable from the connection file and connect to the db
    include_once('aboutus_connection.php');
    // get all the data in the table to view it
    $query = "select * from staff_intro";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>All Staff</title>
        <style>
            body{
              background-color: rgb(56, 57, 58);
              color:white;
            }
            hr{
                color:white;
            }
        </style>
    </head>
<body>
<!-- create a table to show all data from database -->
    <table>
        <tr>
            <th colspan="3"><h2>Staff</h2></th>
        </tr>
        <t>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Introduction</th>
        </t>
        <!-- the while loop loops until there is no data left.. we then echo each piece of data
        // in side of the rows to display on the screen -->
        <?php
            while($rows = mysqli_fetch_assoc($result)){
            echo "
                <tr>
                    <td>" .$rows['FName']."</td>
                    <td>" .$rows['LName']."</td>
                    <td>" .$rows['intro']."<br><hr><br></td>
                </tr>
                ";
            }
        ?>
    </table>
</body>
</html>
