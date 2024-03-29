<?php

@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
			width: 41%;
			height: 100%;
			float: left;
			padding: 50px;
			box-sizing: border-box;
		}
		
		/* Styling the background of
			left floating section */
		section .leftBox .content {
			color: #fff;
			background: rgba(0, 0, 0, 0.5);
			padding: 40px;
			transition: .5s;
		}
		
		/* Styling the hover effect
			of left floating section */
		section .leftBox .content:hover {
			background: #e91e63;
		}
		
		/* Styling the header of left
			floating section */
		section .leftBox .content h1 {
			margin: 0;
			padding: 0;
			font-size: 50px;
			text-transform: uppercase;
		}
		
		/* Styling the paragraph of
			left floating section */
		section .leftBox .content p {
			margin: 10px 0 0;
			padding: 0;
		}
		
		/* Styling the three events section */
		section .events {
			position: relative;
			width: 59%;
			height: 100%;
			background: rgba(0, 0, 0, 0.5);
			float: right;
			box-sizing: border-box;
		}
		
		/* Styling the links of
		the events section */
		section .events ul {
			position: absolute;
			top: 59%;
			transform: translateY(-50%);
			margin: 0;
			padding: 10px;
			box-sizing: border-box;
		}
		
		/* Styling the lists of the event section */
		section .events ul li {
			list-style: none;
			background: #fff;
			box-sizing: border-box;
			height: 230px;
			margin: 15px 0;
		}
		
		/* Styling the time class of events section */
		section .events ul li .time {
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
		section .events ul li:hover .time {
			background: #e91e63;
		}
		
		/* Styling the header of time
			class of events section */
		section .events ul li .time h2 {
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
		section .events ul li .time h2 span {
			font-size: 30px;
		}
		
		/* Styling the details
		class of events section */
		section .events ul li .details {
			padding: 20px;
			background: #fff;
			box-sizing: border-box;
			width: 70%;
			height: 100%;
			float: left;
		}
		
		/* Styling the header of the
		details class of events section */
		section .events ul li .details h3 {
			position: relative;
			margin: 0;
			padding: 0;
			font-size: 22px;
		}
		
		/* Styling the lists of details
		class of events section */
		section .events ul li .details p {
			position: relative;
			margin: 10px 0 0;
			padding: 0;
			font-size: 16px;
		}
		
		/* Styling the links of details
		class of events section */
		section .events ul li .details a {
			display: inline-block;
			text-decoration: none;
			padding: 10px 15px;
			border: 1.5px solid #262626;
			margin-top: 8px;
			font-size: 18px;
			transition: .5s;
		}
		
		/* Styling the details class's hover effect */
		section .events ul li .details a:hover {
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
				<h1>
					<center>Events</center>
				</h1>
				
<p>
					With the idea of imparting programming
					knowledge, Mr. Sandeep Jain, an IIT
					Roorkee alumnus started a dream,
					GeeksforGeeks. Whether programming
					excites you or you feel stifled,
					wondering how to prepare for
					interview questions or
					how to ace data structures and
					algorithms, GeeksforGeeks is a
					one-stop solution. With every
					tick of time, we are adding arrows
					in our quiver. From articles on
					various computer science subjects
					to programming problems for practice,
					from basic to premium courses, from
					technologies to entrance examinations,
					we have been building ample content
					with superior quality. In a short
					span, we have built a community of
					1 Million+ Geeks around the world, 20,000+
					Contributors and 500+ Campus Ambassadors
					in various colleges across the nation.
					Our success stories include a lot of
					students who benefitted in their
					placements and landed jobs at tech
					giants. Our vision is to build a gigantic
					network of geeks and we are only a
					fraction of it yet.
				</p>

			</div>
		</div>

		<div class="events">
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
