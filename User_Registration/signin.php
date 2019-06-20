<?php

	$us=$_POST["user"];
	$pas = $_POST["pass"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "user_registration";


	//create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check Connection
	if($conn->connect_error){
		die("Connection Failed : " . $conn->connect_error);
	}

	if(isset($_POST["submit"])){


		if(!empty($_POST['user']) && !empty($_POST['pass'])){

			//$sql = "INSERT INTO user_reg (Username, Password) VALUES ('$us', '$pas')";

			$sql = "SELECT Username, Password FROM user_reg WHERE Username='$us' ";

			$result = $conn->query($sql);

			if($result->num_rows > 0){
				echo "result is fetched-----";
				while($row=$result->fetch_assoc()){
					echo " fetching details";
					$dbusername=$row['Username'];
					$dbpassword=$row['Password'];
				}
				if($us == $dbusername && $pas == $dbpassword){
					session_start();
					$_SESSION['sess_user'] = $user;



					header("Location: Firstpage.html");
				}
			}
			else
				echo "Invalid Username";

		}
		else
			echo "All fields are required";


	}


?>