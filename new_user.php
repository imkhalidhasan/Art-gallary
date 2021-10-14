<?php
	$servername = "localhost";
$username = "root";
$password = "";
$database= "art";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully ";
			
		if(isset($_POST['user']) && isset($_POST['pass'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$money = $_POST['money'];

			$query = mysqli_query($conn,"SELECT * FROM members WHERE Username='$user'");
			if(mysqli_num_rows($query) > 0 ) { //check if there is already an entry for that username
				echo "Username already exists!";
			}else{
				mysqli_query($conn,"INSERT INTO members (Username, Password,Money) VALUES ('$user', '$pass','$money')");
				header("location:index.php");
			}
	}
	//mysqli_close();
?>

<html>
<meta charset="utf-8">
    <title>Membership</title>
      <link rel="stylesheet" type="text/css" href="style1.css">

    <style>
       body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pages/subp/shopnow.jpg);
       height: 100vh;
       background-size: cover;
       background-position: center;
       font-family: sans-serif;
       margin: 0;
       padding: 0;
     }

    </style>
	
	<body>
	<div class="loginbox">
      <img src="pages/subp/avatar.png" class="avatar">
		<h1>Sign up now!</h1>
			<form action="new_user.php" method="POST">
				<p>Username:</p><input type="text" name="user" />
				<p>Password:</p><input type="password" name="pass"/>
				<p>Credit card number:</p><input type="text" name="money"				/>
				<br />
				<input type="submit" value="Sign up" />
				
				<a href="signin.php">Already have an account?</a>
			</form>
	</body>
	
	
</html>