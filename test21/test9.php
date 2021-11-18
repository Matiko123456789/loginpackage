<?php
  if(($_POST['sender_name'] == "")||
    ($_POST['sender_email'] == "") ||
    ($_POST['message'] == "")){
  	header("location:index.html");
     exit;
  }
  $msg          = "E-MAIL SENT FROM WWW SITE\n";
  $msg         .= "Sender's Name:\t $_POST[sender_name]\n";
  $msg         .= "Sender's E-Mail:\t $_POST[sender_email]\n";
  $msg         .= "Message:\t $_POST[message]\n";
  $to           = "matiko@gmail.com";
  $subject      = "Web Site Feedback";
  $mailheaders  = "From: My Web Site<genericaddress@yourdomain.com>\n";
  $mailheaders .= "Reply-To: $_POST[sender_email]\n";
  mail($to,$subject,$msg,$mailheaders);
?>