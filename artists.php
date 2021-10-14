<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Artists info</title>
	
    <style>
       body {
		   background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pages/subp/exhibition.png);
		   border-collapse: collapse;
		   width: 100%;
		   color: orange;
		   font-family: monospace;
		   font-size: 25px;
		   text-align: center;
		   padding: 50px;
		   margin: 50px;
		   text-shadow: 5px 10px 10px #000000;
	   }
    </style>
  </head>
  
  <body>
    <table>
	   <tr>
	     <th>Name</th>
		 <th>Id</th>
		 <th>Country</th>
		 <th>Price</th>
	   </tr>
	   
	   <?php
	   $conn = mysqli_connect("localhost", "root", "", "art");
	   if ($conn-> connect_error) {
		   die("Connection failed:". $conn->connect_error);
	   }
	   
	   $sql = "SELECT name, id, country, price from artists";
	   $result = $conn-> query($sql);
	   
	   if ($result-> num_rows > 0) {
		   while ($row = $result-> fetch_assoc()) {
			   echo "<tr><td>".$row["name"] ."</td><td>". $row["id"] ."</td><td>". $row["country"] ."</td><td>". $row["price"]."</td></tr>";
		   }
		   echo "</table>";
	   } 
	   else {
		   echo "No result";
	   }
	   
	   $conn-> close();
	   
	   ?>
	   
	</table>
	
	
  </body>
</html>
