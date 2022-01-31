<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'blog_db');
  if ($connection == false) {
    echo 'не удалось подключиться к базе данных<br>';
    echo mysqli_connect_error();
    exit();
  }
  else {
    echo "удалось";
  }
?>
