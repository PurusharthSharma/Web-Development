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
				background-color:rd;
				color:palevioletred;
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
			<h3> Signup Form </h3>

			<form action="signup.php" method="POST">

				<legend>

					<fieldset>

						Username: <input type="text" name="user" class="form-control" placeholder="Enter email"><br />
						Password: <input type="password" name="pass" class="form-control" placeholder="Enter email"><br />

						<input type="submit" value="Signup" name="submit" class="btn btn-block btn-primary mt-3" />

					</fieldset>

				</legend>

			</form>


</div>

			


	</body>

</html>