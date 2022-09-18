<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailto = "your@email.com";
  $header = "From: ".$mailFrom;
  $txt = "You have recived an email from".$name.".\n\n".$message;

  mail($mailto, $subject, $txt, $header );

  header("Location: index.php?mailsend");
}

?>
