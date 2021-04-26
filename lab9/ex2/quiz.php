<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$q1 = $_POST["q1"];
    	$q2 = $_POST["q2"];
    	$q3 = $_POST["q3"];
    	$q4 = $_POST["q4"];
    	$q5 = $_POST["q5"];

    	echo "What is the breed of my cat??";
	echo "<br>";
    	echo "      You answered: $q1";
	echo "<br>";
    	echo "      Correct answer: Exotic Shorthair";
	echo "<br>";
	echo "<br>";

    	echo "What is my the color of my cat's eyes?";
	echo "<br>";
    	echo "      You answered: $q2";
	echo "<br>";
    	echo "      Correct answer: Amber";
	echo "<br>";
	echo "<br>";

    	echo "What is my cat's name in English?";
	echo "<br>";
    	echo "      You answered: $q3";
	echo "<br>";
    	echo "      Correct answer: Maymay";
	echo "<br>";
	echo "<br>";

    	echo "What does my cat's Chinese name mean in English?";
	echo "<br>";
    	echo "      You answered: $q4";
	echo "<br>";
    	echo "      Correct answer: Round Round";
	echo "<br>";
	echo "<br>";

    	echo "What month is my cat born in?";
	echo "<br>";
    	echo "      You answered: $q5";
	echo "<br>";
    	echo "      Correct answer: November";
	echo "<br>";
	echo "<br>";

	$num = 0;
	if ($q1 == "Exotic Short Hair")
	{
		$num++;
	}
	if ($q2 == "Amber")
	{
		$num++;
	}
	if ($q3 == "Maymay")
	{
		$num++;
	}
	if ($q4 == "Round Round")
	{
		$num++;
	}
	if ($q5 == "November")
	{
		$num++;
	}

	$percent = ($num/5)*100;

	echo "You got $num correct!";
	echo "<br>";
	echo "Which is a $percent%!";
?>
