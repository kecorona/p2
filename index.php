<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
	<!-- ?php require 'controller.php'; ? -->
</head>

<body>
	<nav role="navigation">
		<ul class="nav">
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="#">Portfolio</a></li>
		</ul>
	</nav>

	<div>
		<div id="content">
			<article class="article">
				<header>
					<h1>X KC D Style Password Generator</h1>

	<!-- Print the contestant array -->
	<?
	srand((double)microtime() * 10000000);
	$originalArray = array("red", "blue", "green", "brown", "cyan", "magenta", "purle", "cheezy");
	$pickOne = array_rand($originalArray, 1);
	$aRandomSelection = $originalArray[$pickOne ];
	echo "$aRandomSelection was the random selection made";
	?>

</body>
</html>