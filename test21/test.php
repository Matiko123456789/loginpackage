<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php learning</title>
</head>
<body>
 
 <?php
 //define variables and set to empty values
 $name = $email = $gender = $comment = $website = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name    = test_input($_POST['name']);
     $email   = test_input($_POST['email']);
     $website = test_input($_POST['website']);
     $comment = test_input($_POST['comment']);
     $gender  = test_input($_POST['gender']);

     if(empty($name) || empty($gender)) {
        echo "name and gender are required";
     }

     else{
        if(strlen($name) < 5) {
            echo "your name must have more than five char";
        }
        else {
           echo "you are safe"; 
        }
     }
 }
 
 function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    // $data = mysqli_real_escape_string($data);

    return $data;
 }
 ?>

 <h2>PHP Form Validation Example </h2>
 <form method="POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
     Name:    <input type="text" name="name" required>
     <br><br>
     E-mail:  <input type="text" name="email">
     <br><br>
     Website: <input type="text" name="website">
     <br><br>
     Comment: <textarea name="comment" rows="5" cols="40"></textarea>
     <br><br>
     Gender:
     <input type="radio" name="gender" value="female">female
     <input type="radio" name="gender" value="male">male
     <input type="radio" name="gender" value="other">other
     <br><br>
     <input type="submit" name="submit" value="submit">
 </form>

 <?php 
 echo "<h2> Your Input:</h2>";
 echo $name;
 echo "<br>";
 echo $email;
 echo "<br>";
 echo $website;
 echo "<br>";
 echo $comment;
 echo "<br>";
 echo $gender;
 ?>

</body>
</html>