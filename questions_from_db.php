<?php 
 
  $host = "localhost";
  $username = "phpcourse";
  $password = "P@ssw0rd£$";
  $db_name = "phpcourse"; 
  
  $mysql_string = "mysql:host=$host;dbname=$db_name";
  
  $db_connection = new PDO($mysql_string, $username, $password);
  
  $sql = "select * from quiz_questions";
  $rs = $db_connection->query($sql);
  $rows = $rs->fetchAll(PDO::FETCH_ASSOC);
  
  foreach($rows as $row) {
    $questions[$row['question_id']]['question'] = $row['question'];
    $questions[$row['question_id']]['answer'] = $row['answer'];
  
  }
 
?>