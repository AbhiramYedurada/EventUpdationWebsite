<?php

@include 'config.php';

if(isset($_POST['submit'])){

	$event_name = mysqli_real_escape_string($conn, $_POST['event_name']);
	$event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
   $poster=$_FILES['poster']['name'];
   $poster_type=$_FILES['poster']['type'];
   $poster_size=$_FILES['poster']['size'];
   $poster_tem_loc=$_FILES['poster']['tmp_name'];
   $poster_store="".$poster;

   move_uploaded_file($poster_tem_loc,$poster_store);

   $sql_query = "INSERT INTO event_details (event_name, event_date, description, poster)
   VALUES ('$event_name','$event_date','$description','$poster')";

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
	<link rel="stylesheet" href="Form/style.css">
	<style>

		/* Styling the body */
body {
    margin: 0;
    padding: 0;
}

/* Styling section, giving background
    image and dimensions */
section {
    width: 100%;
    height: 100vh;
    background-size: cover;
}

section .Tool{
    width:100%;
    height: 67px;
    background: blue;
}

section .Tool a{
         font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         font-size: 20pt;
         color: wheat;
    }

/* Styling the left floating section */
section .leftBox {
    width: 49%;
    height: 100%;
    float: left;
    padding: 32px;
    box-sizing: border-box;
}

/* Styling the background of
    left floating section */
    section .leftBox .content {
    color: #fff;
    background: rgba(0, 0, 0, 0.5);
    padding: 30px;
    transition: .5s;
}

/*Styling the buttons */
section .leftBox .button {
    background-color: green; 
    border: none;
    color: white;
    padding: 10px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }

/* Styling the three events section */
section .rightBox {
    position: relative;
    width: 51%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    float: right;
    box-sizing: border-box;
}

/* Styling the links of
the events section */
section .rightBox ul {
    position: absolute;
    top: 59%;
    transform: translateY(-50%);
    margin: 0;
    padding: 10px;
    box-sizing: border-box;
}

/* Styling the lists of the event section */
section .rightBox ul li {
    list-style: none;
    background: #fff;
    box-sizing: border-box;
    height: 230px;
    margin: 15px 0;
}

/* Styling the time class of events section */
section .rightBox ul li .time {
    position: relative;
    padding: 20px;
    background: #262626;
    box-sizing: border-box;
    width: 30%;
    height: 100%;
    float: left;
    text-align: center;
    transition: .5s;
}

/* Styling the hover effect
    of events section */
section .rightBox ul li:hover .time {
    background: #e91e63;
}

/* Styling the header of time
    class of events section */
section .rightBox ul li .time h2 {
    position: absolute;
    margin: 0;
    padding: 0;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 60px;
    line-height: 30px;
}

/* Styling the texts of time
class of events section */
section .rightBox ul li .time h2 span {
    font-size: 30px;
}

/* Styling the details
class of events section */
section .rightBox ul li .details {
    padding: 20px;
    background: #fff;
    box-sizing: border-box;
    width: 70%;
    height: 100%;
    float: left;
}

/* Styling the header of the
details class of events section */
section .rightBox ul li .details h3 {
    position: relative;
    margin: 0;
    padding: 0;
    font-size: 22px;
}

/* Styling the lists of details
class of events section */
section .rightBox ul li .details p {
    position: relative;
    margin: 10px 0 0;
    padding: 0;
    font-size: 16px;
}

/* Styling the links of details
class of events section */
section .rightBox ul li .details a {
    display: inline-block;
    text-decoration: none;
    padding: 10px 15px;
    border: 1.5px solid #262626;
    margin-top: 8px;
    font-size: 18px;
    transition: .5s;
}

/* Styling the details class's hover effect */
section .rightBox ul li .details a:hover {
    background: #e91e63;
    color: #fff;
    border-color: #e91e63;
}
	</style>
</head>

<body>
	<section>
		<div class="leftBox">
			<div class="content">	
            <table border="0"  align="center">
            <form action="" method="post" enctype="multipart/form-data">
				<br>
				<br>
				<br>
				<br>
				<tr>
					<td>Event Name         :</td>
					<td><input type="text" name="event_name"></td>
			    </tr>
				<tr>
				</tr>
				<tr>
					<td>Event Date         :</td>
					<td><input type="date" name="event_date"></td>
			    </tr>
				<tr>
				</tr>
				<tr>
					<td>Description        :</td>
				  	<td><textarea rows="10" cols="50" name="description">
				 	</textarea></td>
				</tr>
				<tr>
				</tr>
				<tr>
					<td>Poster :</td>
					<td><input type="file" name="poster"></td>
				</tr>
				<td><button class="button" type="Submit" name="submit">Submit</button></td>
        		<td><input class="button" type="Reset" value="Reset"></td>
			</form>
		</table>
		</div>
		</div>

		<div class="rightBox">
			<ul>
				<li>
					<div class="time">
						<h2>
							23 <br><span>March</span>
						</h2>
					</div>
					<div class="details">
						<h3>
							What is the event about?
						</h3>
						
<p>
"Calling all trailblazers! Join us for a one-of-a-kind innovation marathon Prajwalan, where ideas meet action and problems meet solutions.  Come and unleash your creativity, network with like-minded individuals, and make a difference ! Whether you're an experienced coder or a beginner with a passion for problem-solving, our hackathon will challenge you to push your boundaries, think outside the box & develop unique solutions to real-world problems." 
						</p>


						<a href="#">View Details</a>
						<a href="payment.php">Register Now!</a>
					</div>
					<div style="clear: both;"></div>
				</li>

				<li>
					<div class="time">
						<h2>
							18 <br><span>March</span>
						</h2>
					</div>
					<div class="details">
						<h3>
							What is the event about?
						</h3>
						
<p>
"We have learnt the basics of coding, development and everything but how well are we able to use them in Realtime. We are introducing you A 3 Days Hands-on workshop on DEVOPS by CSE department. Learn the things that you can't see while you build your project. Learn the philosophies that a true computer engineer requires."
						</p>

						<a href="#">View Details</a>
						<a href="payment.php">Register Now!</a>
					</div>
					<div style="clear:both;"></div>
				</li>

				<li>
					<div class="time">
						<h2>
							25 <br><span>March</span>
						</h2>
					</div>
					<div class="details">
						<h3>
							What is the event about?
						</h3>
						
<p>
"Join us for our most interesting event Spurthi where we can participate in different types of games and improve our memory power and enjoy ourselves."
						</p>


						<a href="#">View Details</a>
						<a href="payment.php">Register Now!</a>
					</div>
					<div style="clear:both;"></div>
				</li>
			</ul>
		</div>
	</section>
</body>

</html>