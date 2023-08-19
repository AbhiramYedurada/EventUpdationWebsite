<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event";
	
// connect the database with the server
$conn = new mysqli($servername,$username,$password,$dbname);
	
	// if error occurs
	if ($conn -> connect_errno)
	{
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
	}

	$sql = "select * from feedback";
	$result = ($conn->query($sql));
	//declare array to store the data of database
	$row = [];

	if ($result->num_rows > 0)
	{
		// fetch all data from db into array
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}
?>

<!DOCTYPE html>
<html>
<style>
	td,th {
		border: 1px solid black;
		padding: 10px;
		margin: 5px;
		text-align: center;
	}
</style>

<body>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Year</th>
				<th>Branch</th>
				<th>Position</th>
				<th>Mail</th>
				<th>Rating</th>
				<th>Feedback</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
			foreach($row as $rows)
			{
			?>
			<tr>

				<td><?php echo $rows['firstname']; ?></td>
				<td><?php echo $rows['year']; ?></td>
				<td><?php echo $rows['branch']; ?></td>
				<td><?php echo $rows['position']; ?></td>
				<td><?php echo $rows['mailid']; ?></td>
				<td><?php echo $rows['rating']; ?></td>
				<td><?php echo $rows['subject']; ?></td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>

<?php
	mysqli_close($conn);
?>


