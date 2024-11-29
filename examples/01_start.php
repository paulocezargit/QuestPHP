<?php include("../questphp.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>01_start</title>
	<link rel="stylesheet" type="text/css" href="../questphp.css">
</head>
<body>

	<?php

	$questphp = new Questphp("Title Question", 10);

	$options = [
		[
			[ 'key' => '1', 'title' => 'Question 1 - A'],
			[ 'key' => '2', 'title' => 'Question 1 - B'],
			[ 'key' => '3', 'title' => 'Question 1 - C'],
			[ 'key' => '4', 'title' => 'Question 1 - D'],
		],
		[
			[ 'key' => '1', 'title' => 'Question 2 - A'],
			[ 'key' => '2', 'title' => 'Question 2 - B'],
			[ 'key' => '3', 'title' => 'Question 2 - C'],
			[ 'key' => '4', 'title' => 'Question 2 - D'],
		],
		[
			[ 'key' => '1', 'title' => 'Question 3 - A'],
			[ 'key' => '2', 'title' => 'Question 3 - B'],
			[ 'key' => '3', 'title' => 'Question 3 - C'],
			[ 'key' => '4', 'title' => 'Question 3 - D'],
		],
	];

	$questphp->Add("Quem foi Dom Pedro 1", $options[0], "1");
	$questphp->Add("Quem foi Dom Pedro 2", $options[1], "3");
	$questphp->Add("Quem foi Dom Pedro 3", $options[2], "2");

 
	foreach ($questphp->getQuestions() as $list){
	    
		echo "<h1>".$list["title"]."</h1>"; //Title Question

		foreach($list["options"] as $option){ //Question Options

			echo $option["title"]."<br>";

		}

	}

	

	?>

	<script src="../questphp.js"></script>
</body>
</html>