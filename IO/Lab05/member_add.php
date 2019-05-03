<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Assignment 1</title>
</head>
<body>
<?php

	require_once("../../conf/settings.php"); //please make sure the path is correct

	$conn = @mysqli_connect($host,$user,$pswd,$dbnm);

	if (!$conn) 
	{
		// Displays an error message
		echo "<p>Database connection failure</p>";
	}
	else 
	{
        $query = "CREATE TABLE IF NOT EXISTS vipmember(
                  id int AUTO_INCREMENT,
                  fname varchar(40) NOT NULL,
                  lname varchar(40) NOT NULL,
                  gender varchar(1) NOT NULL,
				  email varchar(40) NOT NULL,
				  phone varchar(40) NOT NULL,
                  PRIMARY KEY  (id)
                  )";
        $result = mysqli_query($conn, $query);
		
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		$query = "insert into vipmember(fname, lname, gender, email, phone) values ('$fname','$lname','$gender', '$email', '$phone');";
		echo $query;
		// executes the query
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) 
		{
			echo "<p>Something is wrong with ",	$query, "</p>";
		} 
		else 
		{
			// display an operation successful message
			echo "<p>Success</p>";
		} // if successful query operation

		// close the database connection
		mysqli_close($conn);
	}
?>
</body>
</html> 