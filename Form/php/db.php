<?php 

$conn = new mysqli('localhost','root','','event');
if(!$conn.mysqli_connect_error())
{
    echo "Connection Denied";
}


?>