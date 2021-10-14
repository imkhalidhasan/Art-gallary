<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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

  </head>
  <body>
  	<form action="new_user.php" method="POST">
	
	<body>
	<div class="loginbox">
      <img src="pages/subp/avatar.png" class="avatar">
		<h1>Sign up now!</h1>
			<form action="new_user.php" method="POST">
				<p>Username:</p><input type="text" name="user" />
				<p>Password:</p><input type="password" name="pass"/>
				<p>Pay 20$ for signing up:</p><input type="text" name="money"				/>
				<br />
				<input type="submit" value="Sign up" />
				
				<a href="signin.php">Already have an account?</a>
			</form>
	</body>
	


  </body>
</html>
