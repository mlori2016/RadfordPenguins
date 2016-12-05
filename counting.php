<?php

	echo "<html>";
	echo "<head>";
	echo "<title>Counting Quiz</title>";
	echo "<link rel='stylesheet' type='text/css' href='quiz.css' />";
	echo "</head>";
	
	echo "<body>";
	
	echo "<div id='box'>";
	
	echo "<h1>Counting</h1>";
	echo "<p>";
	echo "<b>Instructions:</b> Count the Pengins!";
	echo "</p>";
	
	if (isset($_POST['submit'])) {
		$numOfPenguins = $_COOKIE['numOfPenguins'];
		$score = $_COOKIE['score'];
	}
	else if (isset($_POST['reset'])) {
		$numOfPenguins = rand(1,20);
		$score = $_COOKIE['score'];
	}
	else {
		$numOfPenguins = rand(1,21);
		$score = 0;
	}
	
	setcookie('numOfPenguins', $numOfPenguins, time() + 3600, "/");
	setcookie('score', $score, time() + 3600, "/");
	
	for ($i=0;$i<$numOfPenguins;$i++) {
		echo "<img src='penguin.png' height='50px' />";
	}
	echo "<br/>";
	echo "<br/>";
	echo "<form action='counting.php' method='post'>";
	echo "<input type='text' name='in' />";
	echo "<input type='submit' id='submit' name='submit' value='Submit' />";
	echo "</form>";
	
	if (isset($_POST['submit'])) {
		
		if ($_POST['in'] === $numOfPenguins) {
			if ($numOfPenguins == 1)
				echo "<p>Correct! There is $numOfPenguins penguin! Good job!</p>";
			else
				echo "<p>Correct! There are $numOfPenguins penguins! Good job!</p>";
			echo "<script type='text/javascript'>";
			echo "document.getElementById('submit').disabled = true;";
			echo "</script>";
			$score++;
		}
		else {
			echo "<p>That isn't quite right! Try again!</p>";
		}
	}
	
	echo "<p><b>Your Score:</b> $score</p>";
	setcookie('score', $score, time() + 3600, "/");
	
	echo "<form action='counting.php' method='post'>";
	echo "<input type='submit' name='reset' value='New Problem' />";
	echo "</form>";
	
	echo "</div>";
	
	echo "</body>";
	echo "</html>";

?>