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

			<form>
				<fieldset>
					<legend>X KC D Style Password Generator</legend>

					<fieldset>
						<legend>Presets</legend>
						<input type="button" name="preset_1" id="preset_1" value="Preset 1">
						<input type="button" name="preset_2" id="preset_2" value="Preset 2">
						<input type="button" name="preset_3" id="preset_3" value="Preset 3">
						<input type="button" name="preset_4" id="preset_4" value="Preset 4">
						<input type="button" name="preset_5" id="preset_5" value="Preset 5">
					</fieldset>

					<fieldset>
						<legend>Words</legend>
						<label for="num_words">Number of words:</label>
						<select name="num_words" id="num_words">
							<option value="1" selected="selected">1</option>
							<option value="2" 
					</fieldset>
				</fieldset>

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