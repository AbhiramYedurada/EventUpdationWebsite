<?php

@include 'config.php';

if(isset($_POST['submit'])){

	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $event = mysqli_real_escape_string($conn, $_POST['event']);
   $file=$_FILES['file']['name'];
   $file_type=$_FILES['file']['type'];
   $file_size=$_FILES['file']['size'];
   $file_tem_loc=$_FILES['file']['tmp_name'];
   $file_store="".$file;

   move_uploaded_file($file_tem_loc,$file_store);

   $sql_query = "INSERT INTO payment (first_name, email, phone, event, file)
   VALUES ('$first_name','$email','$phone','$event','$file')";

   if (mysqli_query($conn, $sql_query)) 
   {
      echo "New Details Entry inserted successfully !";
   } 
   else
   {
      echo "Error: " . $sql . "" . mysqli_error($conn);
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment form</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        .det{
	text-align:center;
	border-radius:0px;
	margin:10px auto;
	padding:10px;
	width:70%;
	border: 1px solid;
	outline:none;
    }
    .bt{
	width:100%;
	height:7%;
	color:white;
	background-color:red;
    padding: 10px 16px;
	margin:8px auto;
	cursor:pointer;	
    }
    </style>
</head>
<body>
    <center><h2>Payment</h2></center>
    <table border="1" align="center">
        <tr>
            <td padding:15px>
            <b>ENTER MOBILE NUMBER</b><br>
            <input class="det" type="text" placeholder="Enter UPI ID">
            <button class="bt" type="button">PROCEED</button>
            </td>
            <td>
                <br>
                <h3>Scan Here!<img src="scan.jpg" width="20" height="20"><br>
                <img src="qr.jpg" hspace="130" width="200" height="200"><br>
                <br>
                <img src="a.png" height="100px" width="100px">
                <img src="b.jpg" height="90px" width="90px">
                <img src="c.jpeg" height="100px" width="100px">
                <img src="d.png" height="100px" width="100px">
                <br>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td>
            <table border="0" align="center">
            <form action="" method="post" enctype="multipart/form-data">
            <tr>
            <td>Name         :</td>
            <td><input type="text" placeholder="Name" name="first_name" id="first_name"></td>
            </tr>
            <tr>
            <td>Email        :</td>
            <td><input type="text" placeholder="Email" name="email" id="email"></td>
            </tr>
            <tr>
            <td>Phone        :</td>
            <td><input type="text" placeholder="Phone" name="phone" id="phone"></td>
            </tr>
            <tr>
            <td>Event Name   :</td>
            <td><input type="text" placeholder="Event" name="event" id="event"></td>
            </tr>
            <tr>
			<td>Payment Photo:</td>
			<td><input type="file" placeholder="Upload Here" name="file"></td>
			</tr>
            <td><button class="button" type="Submit" name="submit">Submit</button></td>
        </tr>
    </table>

</body>

</html>

