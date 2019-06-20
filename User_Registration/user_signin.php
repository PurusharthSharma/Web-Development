<! Doctype html>

<html>

	<head>

		<title>Register | Code it 100 </title>

		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

		<style>

			body{
				margin-top: 100px;
				margin-bottom:100px;
				margin-right:150px;
				margin-left:80px;
				
				font-size:24px;
				font-family: verdana;
			}

			h1{
				color:indigo;
				font-family: verdana;
				font-size:100%;
			}

			h3{
				color:indigo;
				font-family: verdana;
				font-size:100%;
			}
			.f_box{
				width:50%;
				margin:10%;
				background-color: wheat;
			}

		</style>

	</head>


	<body>

		<center>

			<h1> Login/Signup form using PHP and MySQL </h1>

		</center>

		<p><a href="user_signup.php">SignUp</a> | <a href="user_signin.php">SignIn</a>

			<div class="f_box">
			<marquee><h3><b> Login Form </b></h3></marquee>

			<form action="signin.php" method="POST">

				<div class="form-group-row">
					Username: <input type="text" name="user" class="form-control" placeholder="Enter email" ><br />
					Password: <input type="password" name="pass" class="form-control" placeholder="Enter email"><br />
				</div>

				<input type="submit" class="btn btn-block btn-primary mt-3" value="Login" name="submit" />

			</form>

		</div>




			



	</body>

</html>