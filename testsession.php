<?php
  session_start();
?>

<html>
  <body>
    <?php
      if(!empty($_REQUEST)) {
        print_r($_REQUEST);
      }
      
      if(!empty($_REQUEST['visitor_name'])) {
        $_SESSION['visitor_name'] = $_REQUEST['visitor_name'];
      }
      
      if(!empty($_SESSION['visitor_name'])) {
        echo "<p>Welcome ".htmlentities($_SESSION['visitor_name'])."</p>";
      }
    ?>
    <form method='post' action=''>
      <input type='text' name='visitor_fullname' />
      <input type='submit' name='username_button' value='Login' />
    </form>
  </body>
</html>
