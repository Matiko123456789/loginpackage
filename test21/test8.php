<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Feedback Form</title>
</head>
<body>
   
  <form method="POST" action="test8.php">
  	<p><strong>Your Name:</strong><br>
    <input type="text" name="sender_name" size="30"></p>
    <p><strong>Your E-Mail Address:</strong><br>
    <input type="text" name="sender_email" size="30"></p>
    <p><strong>Message:</strong><br>
    <textarea name="message" cols="30" rows="5" wrap="virtual"></textarea></p>
    <p><input type="submit" name="submit" value="Send This Form"></p>	
  </form>

</body>
</html>