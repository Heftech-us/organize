<script>
	
	let Entries =[];
// 	let Entry = new Object();
	var i = 0;
	

</script>


<?php
include 'php/g_var.php';
include 'inc/header.php';


	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
	}
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * FROM MyBill";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
	//     output data of each row
			while($row = $result->fetch_assoc()) {
				$name = $row["billname"];
				$amount =$row["billamount"];
				$date = $row["duedate"];
				$comments = $row["comments"];

				
				echo "<script>Entry = new Object(); 
				Entry.billname = '$name';
				Entry.duedate = '$date';
				Entry.billamount = '$amount';
				Entry.comments = '$comments';
				Entries.push(Entry);
				console.log(Entries[i]);
				i+=1;
				</script>";

			}
	} else {
			echo "0 results";
	}
	$conn->close();
include 'inc/footer.php';
?>

<!-- <script src="../js/app.js"></script> -->