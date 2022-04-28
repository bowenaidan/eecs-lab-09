<?php

	$score = 0;
  ($_POST["state_capitol"]=="Topeka") ? $score+=20 : null;
  ($_POST["stock_split"]=="same") ? $score+=20 : null;
  ($_POST["treasury"]=="Equity") ? $score+=20 : null;
  ($_POST["telephone"]=="Alexander Graham Bell") ? $score+=20 : null;
  ($_POST["air_jordan"]=="1985") ? $score+=20 : null;
  
  include "./Quiz.html";
  echo "<br><br><div id=\"Quiz\">";
  
  echo "<h1>Quiz Results</h1>";
  echo "<p>Question 1: What is the capitol of Kansas?<br>";
  echo "You answered: ".$_POST["state_capitol"]."<br>";
  echo "Correct Answer: Topeka</p>";

  echo "<p>Question 2: When a corporation issues a stock split, how does it effect the equity account?<br>";
  echo "You answered: ".$_POST["stock_split"]."<br>";
  echo "Correct Answer: Equity stays the same</p>";

  echo "<p>Question 3: Purchasing treasury stock affects which part of the accounting equation?<br>";
  echo "You answered: ".$_POST["treasury"]."<br>";
  echo "Correct Answer: Equity</p>";

  echo "<p>Question 4: Who was the inventor of the telephone?<br>";
  echo "You answered: ".$_POST["telephone"]."<br>";
  echo "Correct Answer: Alexander Graham Bell</p>";

  echo "<p>Question 5: When did the Air Jordan I debut?<br>";
  echo "You answered: ".$_POST["air_jordan"]."<br>";
  echo "Correct Answer: 1985</p>";

  $correct_answers = $score/20;
  echo "<p>Correct Answers: $correct_answers<br>";
  echo "<p>Score: $score</p><div>";
  
?>