<?php
	$q = strval($_GET['q']);
	
	$servername = "localhost";
	$username = "root";
	$password = "pwd";
	$dbname = "ajax_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM live_search WHERE name LIKE  '%$q%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["name"] . " Found";
			echo "</br>";
			
		}
	} else {
		
		echo "No suggestion";
	}


	$conn->close();
		
	 
?>
