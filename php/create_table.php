<?php

///////////////////////
//
// sql to create table
// Create connection
///////////////////////

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	jsLog("error");	
    die("Connection failed: " . mysqli_connect_error());
}


 	//mysqli_query($conn,"DROP TABLE $tablename") or die(mysql_error());

	$sql = "CREATE TABLE $tablename (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  duedate DATE,
  billname VARCHAR(30) NOT NULL,
  billamount VARCHAR(30) NOT NULL,
  comments VARCHAR(100),
  reg_date TIMESTAMP
  )";


  jsLog("after table");	
	if (mysqli_query($conn, $sql)) {
			jsLog("Table $tablename created successfully");
	} else {
			jsLog("Error creating table, table already exists");
	}
mysqli_close($conn);