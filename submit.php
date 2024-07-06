<?php

// Taking all 5 values from the form data(input)

$uname = $_POST['uname'];
$uage = $_POST['uage'];
$birthdate = $_POST['birthdate'];
$uaddress = $_POST['uaddress'];
$ubg = $_POST['ubg'];
$uphno = $_POST['uphno'];
$gender = $_POST['gender'];

echo $uname.$uage.$birthdate.$uaddress.$ubg.$uphno.$gender;
// servername => localhost
// username => root
// password => empty
// database name => staff
$host = "localhost";
$username = "root";
$password = "";
$dbname = "blood donators";
$conn = new mysqli("localhost", "root", "", "blood donators");

// Check connection
if($conn->connect_error){
	die("ERROR: Could not connect. "
		. $conn->connect_error);
}

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO donors (uname,uage,birthdate,uaddress,ubg,uphno,gender) VALUES ('$uname','$uage','$birthdate','$uaddress','$ubg','$uphno','$gender')";

$rs = mysqli_query($conn, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
else{
	echo "ERROR: Hush! Sorry $sql. "
		. mysqli_error($conn);
}


// Close connection
mysqli_close($conn);

?>