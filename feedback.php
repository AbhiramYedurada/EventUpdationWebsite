<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="event";

$conn=mysqli_connect($server_name,$username,$password,$database_name);//connection establishment


if(isset($_POST['submit'])){

	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$year = mysqli_real_escape_string($conn, $_POST['year']);
	$branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $mailid = mysqli_real_escape_string($conn, $_POST['mailid']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);

   $sql_query = "INSERT INTO feedback (firstname, year, branch, position, mailid, rating, subject)
   VALUES ('$firstname','$year','$branch','$position','$mailid','$rating','$subject')";

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
<html>    
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">    
<style>    
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    
    
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}   

.button {
  background-color: green; 
  border: none;
  color: white;
  padding: 8px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
    
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */    
</style>   
</head>    
<body>    
<h2>FEED BACK FORM</h2>    
<div class="container">    
  <form action="" method="post">    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">Full First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placeholder="Your name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Year</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="year" name="year" placeholder="Year..">    
      </div>    
    </div>
<div class="row">    
      <div class="col-25">    
        <label for="lname">Branch</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="branch" name="branch" placeholder="Branch..">    
      </div>    
    </div>  
<div class="row">    
      <div class="col-25">    
        <label for="Position">Position</label>    
      </div>    
      <div class="col-75">    
        <select id="position" name="position">    
            <option value="none">Select position</option>    
          <option value="facultay">faculty</option>    
          <option value="student">student</option>    
                 
        </select>    
      </div>    
    </div>     
   
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="mailid" placeholder="Your mail id..">    
        </div>    
      </div>   
<div class="row">    
      <div class="col-25">    
        <label for="rating">Rating</label>    
      </div>    
      <div class="col-75">    
        <select id="rate" name="rating">    
            <option value="none">Select rating out of 5</option>    
          <option value="1">1</option>    
          <option value="2">2</option>    
          <option value="3">3</option>    
          <option value="4">4</option>    
          <option value="5">5</option>    
            
        </select>    
      </div>    
    </div>     
    <div class="row">    
     </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>   


<input type="submit" name="submit" value="Submit" />   
<a href="Retrieve.php"><input class="button" value="View Feedback" />   </a>
</form>   
</div>    
    
</body>    
</html>    