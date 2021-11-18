<?php 
 
  function check_login($con)
  {
  	if(isset($_SESSION['user_id']))
  	{

  		$id    = $_SESSION['user_id'];
  		$query = "SELECT * FROM users WHERE user_id = '$id' LIMIT 1"; 

  		$result = mysqli_query($con,$query);
  		
  	}
  	//redirect to login
  	header("location: login.php");
  	die;
  }
  function random_num($length){
  	$length = "";
  	if($length < 5){
  		$length = 5;
  	}
  	$len = rand(4,$length);
  	for ($i=0; $i < $len; $i++) { 
  		$text .= rand(0,9);
  	}
      return $text;
  }