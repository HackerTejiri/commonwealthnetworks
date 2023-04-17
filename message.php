<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $web = $_POST['web'];
  $message = $_POST['message'];

  if(!empty($_POST) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver = "onisurutejiritj@gmail.com";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nweb: $web\nMessage: $message\n\nRegards,\n$name";
        $sender = "From: $email";
        if(mail($receiver, $subject, $body, $sender)){
          echo "Success ,message sent.";
        }else{
            echo "sorry failed to send message.";
        }
    }else{
        echo "enter a valid email address";
    }

  }else{
    echo "Please enter email and password fields";
  }
    
?>