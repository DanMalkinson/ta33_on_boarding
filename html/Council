<?php

$servername = "localhost:3306";
$username = "root_sql";
$password = "yourpasswd";
$dbname = "tables";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	

	// Get all the categories from category table
	$sql = "SELECT local_government, Garbage FROM council_bins";
	$all_councils = mysqli_query($con,$sql);

	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly
	if(isset($_POST['submit']))
	{
		// Store the Council name in a "name" variable
		$name = mysqli_real_escape_string($con,$_POST['council_name']);
	
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">	
</head>
<body>
	<form method="POST">
		<label>Select a Council</label>
		<select name="council_name">
			<?php
				// use a while loop to fetch data
				// from the $all_categories variable
				// and individually display as an option
				while ($council = mysqli_fetch_array(
						$all_councils,MYSQLI_ASSOC)):;
			?>
				<option value="<?php echo $council["local_government"];
					// The value we usually set is the primary key
				?>">
					<?php echo $council["local_government"];
						// To show the category name to the user
					?>
				</option>
			<?php
				endwhile;
				// While loop must be terminated
			?>
		</select>
		<br>
		<input type="submit" value="submit" name="submit">
	</form>

	<br>
</body>
</html>
