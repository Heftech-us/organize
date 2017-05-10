<?php
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
	echo '<script>console.log("Connection Failed")</script>';
    die("Connection failed: " . mysqli_connect_error());
	
}else{
	jsLog("Connected successfully");
}

////////////////////////
// Create database
////////////////////////
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    jsLog("Database created successfully");
} else {
	//check to see if database exists
	$err = mysqli_error($conn);
	
		if(strpos($err,"database exists")>0){
				jsLog("database exists");		
			}else{
				jsLog("Error creating database: " . mysqli_error($conn));
				//jsLog("error");	
		}
}
mysqli_close($conn);