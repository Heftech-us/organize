<?php
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

jsLog("before table");	

	$sql = "INSERT INTO $tablename (duedate, billname, billamount,comments)
	VALUES ('$duedate', '$billname', '$billamount', '$comments')";

	if (mysqli_query($conn, $sql)) {
			jsLog("New record created successfully");
	} else {
			jsLog('Error:  ' . $sql . '<br>' . mysqli_error($conn));
	}
mysqli_close($conn);

//echo "<script>window.location = 'http://organize.heftech.us/index.php'</script>";

