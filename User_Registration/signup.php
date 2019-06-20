<?php


  $us= $_POST["user"];
  $pas= $_POST["pass"];
  //echo $pas;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST["submit"])){


if(!empty($_POST['user']) && !empty($_POST['pass'])){

$sql = "INSERT INTO user_reg (Username, Password)
VALUES ('$us', '$pas')";

$query = "SELECT Username FROM user_reg WHERE Username='$us' ";



if(($query)){

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    echo "already exists";
    
}
}
else{
	echo "username is already exists";
	 
}
}
else{
	echo "all field required";
	 
}

}

$conn->close();

			?>
