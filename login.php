
<?php 
session_start();
	include("connection.php");
	include("functions.php") ;

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password ) && !is_numeric($user_name)){
			//read from  database

			
             $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
             $result = mysqli_query($con,$query);

             if($result)
            {
             	if($result && mysqli_num_rows($result ) > 0)
                {
		  			$user_data = mysqli_fetch_assoc($result);
		  			if($user_data['password'] === $password){
		  				$_SESSION['user_id'] = $user_data['user_id'];
		  				 header("location:index.php");
		  				 die;
		  			}
  		        }
            }
            echo "wrong password";
		}
		else
		{
			echo "wrong password";
		}
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

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
			border: round;
		}
		#box{
			background-color:#664464;
			margin: auto;
			width: 300px;
			padding: 20px;
		}

	</style>
      <div id="box">
      	<div style="font-size: 20px; margin: 10px;color: white; ">Login</div>
      	<form method="POST">
      		<input id = "text" type = "text" name = "user_name"><br><br>
      		<input id = "text" type = "password" name = "password"><br><br>
            <input id = "button" type = "submit" value = "Login"><br><br>
            <a href="signup.php"><b>Clic to signup</b></a><br><br>
</body>
</html>