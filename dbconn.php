<?php
$mysqli = new mysqli("localhost","root","","solution");
if($mysqli->connect_error)
{
    echo $mysqli->connect_error;
}
?>