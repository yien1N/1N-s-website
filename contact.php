<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "acs110130@gm.ntcu.edu.tw";
  $subject = "聯絡表單";
  $body = "姓名：$name\n電子郵件：$email\n訊息：$message";

  if (mail($to, $subject, $body)) {
    echo "<p>您的訊息已成功送出。</p>";
  } else {
    echo "<p>送出訊息失敗，請稍後再試。</p>";
  }
} else {
?>

<form method="post" action="contact.php">
  <label for="name">姓名：</label>
  <input type="text" id="name" name="name" required>

  <label for="email">電子郵件：</label>
  <
