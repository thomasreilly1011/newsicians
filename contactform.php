<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['msg'];

    $mailTo = "thomas.edreilly@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "Email recieved from " . $name . " by the contact page of Newsicians.\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsent");
  }
?>
