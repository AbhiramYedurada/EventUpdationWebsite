<?php

@include 'config.php';

if(isset($_POST['save'])){

   $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pwd = md5($_POST['pwd']);
   $cpwd = md5($_POST['cpwd']);
   $mobile = $_POST['mobile'];

   echo $first_name."<br>";
   echo $last_name."<br>";
   echo $email."<br>";
   echo $mobile;
}
?>