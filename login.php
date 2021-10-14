<?php
	//$username = "root";
	//$password = "";
	//$hostname = "localhost";
	
	//$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	
	//$selected = mysql_select_db("art", $dbhandle);
	
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
echo "Connected successfully ";
	$myusername = $_POST['user'];
	$mypassword = $_POST['pass'];
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	
	$query = "SELECT * FROM members WHERE Username='$myusername' and Password='$mypassword'";
	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);
	
	
	
	
		header("location:shopnow.php");
	
?>


<<html>
<meta charset="utf-8">
  <head>
    <meta charset="utf-8">
    <title>Membership</title>
      <link rel="stylesheet" type="text/css" href="style1.css">

    <style>
       body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pages/subp/membership.jpg);
       height: 100vh;
       background-size: cover;
       background-position: center;
       font-family: sans-serif;
       margin: 0;
       padding: 0;
     }

    </style>

  </head>
  <body>
  	<form action="login.php" method="POST">
    <div class="loginbox">
      <img src="pages/subp/avatar.png" class="avatar">
         <h1>Sign in</h1>
           <form>
		   
             <p>Username</p>
             <input type="text" name="" placeholder="Enter Username">
             <p>Password</p>
             <input type="password" name="" placeholder="Enter Password">
             <input type="submit" name="" value="login">
             
             <a href="new_user.php">Don't have an account?</a>

           </form>

    </div>

    <header>
      <div>
        
      <a href="index.php">Home</a>
      </div>
    </header>

  </body>
</html>


