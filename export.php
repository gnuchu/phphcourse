<?php
  header("Content-Type: application/json");
  require("questions_from_db.php");
  echo json_encode($questions);
?>