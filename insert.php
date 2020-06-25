<?php
include "dbconn.php"; // Using database connection file here
if(isset($_POST['submit']))
{		
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mysqli->query("INSERT INTO table_ds (firstname,lastname) VALUES ('$firstname','$lastname')");
     if(!$mysqli)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully <br/>";
    }
}
mysqli_close($mysqli); // Close connection
?>