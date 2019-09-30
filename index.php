<?php 
  if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    echo "<h1>Hello, World!!</h1>";
  }
  elseif ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = $_REQUEST['name'];
    if(empty($name)) {
      echo '<h1>Hello, whoever you are!!</h1>';
    }
    else {
      echo '<h1>Hello, ' . $name . '!!</h1>';
    }
  }
  else {
    http_response_code(405);
  }
?>