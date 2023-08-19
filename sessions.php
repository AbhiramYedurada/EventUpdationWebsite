<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = md5($_POST['pwd']);
 
   $select = " SELECT * FROM users WHERE email = '$email' && pwd = '$pwd' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['email'] == 'srkrace@gmail.com'){
         
         $_SESSION['email'] = $row['email'];
         header('location:events.php');

      }else{

         $_SESSION['user_name'] = $row['first_name'];
         header('location:event.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
      echo 'incorrect email or password!';
   }

};
?>