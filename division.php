<?php

	echo "<html>";
	echo "<head>";
	echo "<title>Division Quiz</title>";
	echo "<link rel='stylesheet' type='text/css' href='quiz.css' />";
	echo "</head>";
	
	echo "<body>";
	
	echo "<div id='box'>";
	
	echo "<h1>Division</h1>";
	echo "<p>";
	echo "<b>Instructions:</b> Solve each division problem.";
	echo "</p>";
	
	if (isset($_POST['submit'])) {
		$number1 = $_COOKIE['number1'];
		$number2 = $_COOKIE['number2'];
		$result = $_COOKIE['result'];
		$score = $_COOKIE['score'];
	}
	else if (isset($_POST['reset'])) {
		$number1 = rand(1,12);
		$number2 = rand(1,12);
		$result = $number1 * $number2;
		$score = $_COOKIE['score'];
	}
	else {
		$number1 = rand(1,12);
		$number2 = rand(1,12);
		$result = $number1 * $number2;
		$score = 0;
	}
	
	setcookie('number1', $number1, time() + 3600, "/");
	setcookie('number2', $number2, time() + 3600, "/");
	setcookie('result', $result, time() + 3600, "/");
	setcookie('score', $score, time() + 3600, "/");
	
	echo "<h1>$result / $number1</h1>";
	
	echo "<form action='division.php' method='post'>";
	echo "<input type='text' name='in' />";
	echo "<input type='submit' id='submit' name='submit' value='Submit' />";
	echo "</form>";
	
	if (isset($_POST['submit'])) {
		
		if ($_POST['in'] == ($result/$number1)) {
			echo "<p>That is correct! Good job!</p>";
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
	
	echo "<form action='division.php' method='post'>";
	echo "<input type='submit' name='reset' value='New Problem' />";
	echo "</form>";
	
	echo "</div>";
	
	echo "</body>";
	echo "</html>";

?>