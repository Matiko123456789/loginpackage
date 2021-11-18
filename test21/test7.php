<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.error{
			color: #FF0000;
		}
	</style>
</head>
<body>
<?php 
//Define variables and set to empty values
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr;
$name    = $email    = $website    = $comment    = $gender;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST['name'])){
		$_nameErr = "Name is required";
	}
		else{
			$name = test_input($_POST['name']);
		}
		if(empty($_POST['email'])){
			$_emailErr = "Email is required";
		}
		else{
			$email = test_input($_POST['email']);
		}
		if(empty($_POST['website'])){
			$websiteErr = "";
		}
		else{
			$website = test_input($_POST['website']);
		}
		if(empty($_POST['comment'])){
			$commentErr = "";
		}
		else{
			$comment = test_input($_POST['comment']);
		}
		if(empty($_POST['gender'])){
			$genderErr = "Gender is required";
		}
		else{
			$gender = test_input($_POST['gender']);
		}
} 
		 function test_input($data){
		 	$data = trim($data);
		 	$data = stripcslashes($data);
		 	$data = htmlspecialchars($data);
		 }
?>

   <h2>PHP Form Validation</h2>
   <p><span class = "error">* required field</span></p>
   <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   	Name: <input type="text" name="name">
   	<span class = "error">*<?php echo $nameErr;?></span>
   	<br><br>
   	E-mail: <input type="text" name="email">
   	<span class = "error">*<?php echo $emailErr;?></span>
   	<br><br>
   	website: <input type="text" name="website">
   	<span class = "error">*<?php echo $websiteErr;?></span>
   	<br><br>
   	comment: <textarea name="comment" rows="5" cols="40"></textarea>
   	<br><br>
   	Gender:
   	<input type="radio" name="gender" value="female">female
   	<input type="radio" name="gender" value="male">male
   	<input type="radio" name="gender" value="other">other
   	<span class = "error">*<?php echo $genderErr;?></span>
   	<br><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
echo "<h2> Your Input:</h2>";
 echo $name;
 echo "<br>";
 echo $email;
 echo "<br>";
echo  $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>
</body>
</html>