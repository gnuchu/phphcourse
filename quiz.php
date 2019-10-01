<?php
 
  require("questions_from_db.php");
  
  $size_of_question_list = sizeof($questions);
  
  // check if we are in the middle of answering a question (if we are, then
  // the random_number will already be set), otherwise, choose a number
  
  if(empty($_REQUEST['random_number'])) {
    $random_number = rand(0, $size_of_question_list - 1);
  } else {
    $random_number = $_REQUEST['random_number'];
  }
?>
 
<h1>Quiz</h1>
 
<?php
 
  if(!empty($_REQUEST['user_answer'])) {
    $user_answer = $_REQUEST['user_answer'];
    $question_id = $_REQUEST['random_number'];
    echo "<p>You answered '$user_answer' for Question #$question_id</p>";
  
    if($user_answer == $questions[$question_id]['answer']) {
        echo "Correct :)";
    } else {
        echo "Wrong :(";
    }
  
  }
?>
 
<p><strong>Question: </strong>
  <?= $questions[$random_number]['question']; ?>
</p>

<form method='post' action='quiz.php'>
  <input type='hidden' name='random_number' value='<?= $random_number; ?>' />
  <input type='text' name='user_answer' />
  <input type='submit' name='answer_button' value='Answer'/>
</form>
 
<p><a href='quiz.php'>Another random question</a></p>