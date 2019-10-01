<?php
  $host = 'localhost';
  $user = 'phpcourse';
  $password = 'P@ssw0rd£$';
  $db = 'phpcourse';

  $connect_string = "mysql:host=$host;dbname=$db";
  $conn = new PDO($connect_string, $user, $password);

?>