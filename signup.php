<?php

	session_start();
	include("connection.php");
	include("functions.php") ;

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password ) && !is_numeric($user_name)){
			//save to database

			$user_id = random_num(20);
             $query = "INSERT INTO users(user_id,user_name,password) 
                       VALUES ('$user_id','$user_name','$password ')";
             mysqli_query($con,$query);
             header("location:login.php");
		}
		else
		{
			echo "please enter some valid information";
		}
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>

</head>
<body>
	<style type="text/css">
		#text{
			height: 25px;
			border_radius:5px ;
			padding: 4px;
			border: solid thin #aaa;
			width: 80%;
		}
		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
		}
		#box{
			background-color:grey ;
			margin: auto;
			width: 300px;
			padding: 20px;
		}

	</style>

      <div id="box">
      	<div style="font-size: 20px; margin: 10px;color: white; ">Signup</div>
      	<form method="POST">
      		<input id = "text" type = "text" name = "user_name"><br><br>
      		<input id = "text" type = "password" name = "password"><br><br>
            <input id = "button" type = "submit" value = "Signup"><br><br>
            <a href="login.php">Clic to Login</a><br><br>
</body>
</html>