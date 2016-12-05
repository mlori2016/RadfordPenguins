<?php

	echo "<html>";
	echo "<head>";
	echo "<title>Algebra Quiz</title>";
	echo "<link rel='stylesheet' type='text/css' href='quiz.css' />";
	echo "</head>";
	
	echo "<body>";
	
	echo "<div id='box'>";
	
	echo "<h1>Algebra</h1>";
	echo "<p>";
	echo "<b>Instructions:</b> Solve for x.";
	echo "</p>";
	
	if (isset($_POST['submit'])) {
		$number1 = $_COOKIE['number1'];
		$number2 = $_COOKIE['number2'];
		$x = $_COOKIE['x'];
		$result = $_COOKIE['result'];
		$score = $_COOKIE['score'];
	}
	else if (isset($_POST['reset'])) {
		$number1 = rand(0,12);
		$number2 = rand(0,20);
		$x = rand(0,12);
		$result = ($number1 * $x) + $number2;
		$score = $_COOKIE['score'];
	}
	else {
		$number1 = rand(0,12);
		$number2 = rand(0,20);
		$x = rand(0,12);
		$result = ($number1 * $x) + $number2;
		$score = 0;
	}
	
	setcookie('number1', $number1, time() + 3600, "/");
	setcookie('number2', $number2, time() + 3600, "/");
	setcookie('x', $x, time() + 3600, "/");
	setcookie('result', $result, time() + 3600, "/");
	setcookie('score', $score, time() + 3600, "/");
	
	echo "<h1>" . $number1 . "x + $number2 = $result</h1>";
	
	echo "<form action='algebra.php' method='post'>";
	echo "<input type='text' name='in' />";
	echo "<input type='submit' id='submit' name='submit' value='Submit' />";
	echo "</form>";
	
	if (isset($_POST['submit'])) {
		
		if ($_POST['in'] ==  $x) {
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
	
	echo "<form action='algebra.php' method='post'>";
	echo "<input type='submit' name='reset' value='New Problem' />";
	echo "</form>";
	
	echo "</div>";
	
	echo "</body>";
	echo "</html>";

?>