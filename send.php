<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = htmlspecialchars(trim($_POST['name']));
  $email = htmlspecialchars(trim($_POST['email']));
  $day = htmlspecialchars(trim($_POST['day']));
  $time = htmlspecialchars(trim($_POST['time']));

  $to = "zheniabilyk123@gmail.com";
  $subject = "New Appointment Request";
  $body = "Name: $name\nEmail: $email\nPreferred Day: $day\nPreferred Time: $time";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Error sending message.";
  }
}
?>
