<?php
  $conn=mysqli_connect("127.0.0.1:3307","root","","BBT") or die("connection falied");
  session_start();
  session_unset();
  session_destroy();
  header("Location: login.php");
?>     