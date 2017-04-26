<?php

  $emailTo = "limin9yuan@gmail.com";
  $subject = "Hi";
  $body = "How are you";
  $headers = "From: limin9yuan@gmail.com";

  if (mail($emailTo, $subject, $body, $headers)) {
    echo "Send";
  }
  else {
    echo "Fail";
  }


?>
