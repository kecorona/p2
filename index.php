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
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
						</select>

						<br>

						<h5>Word length</h5>
						<label for="min_word_length">min:</label>
						<select name="min_word_length" id="min_word_length">
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4" selected="selected">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
			
						<label for="max_word_length">max:</label>
						<select name="max_word_length" id="min_word_length">
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6" selected="selected">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
						</select>
						<br>

						<div class="row">
							<div class="col-xs-6 col-md-4">
								<h3>Case Transformation:</h3>
								<div class="checkbox">
								  <span><input type="radio" name="case_trans" value="none" checked="checked">NONE</span>
								  <span><input type="radio" name="case_trans" value="upperCase">UPPER CASE</span>
								  <span><input type="radio" name="case_trans" value="lowerCase">LOWER CASE</span>
								  <span><input type="radio" name="case_trans" value="alt">ALTERNATE CASE</span>
								</div>
							</div>
						</div>
					</fieldset>

					<div class="container">
						<input type="button" id="gen_password" name="gen_password" value="Generate Password">
						<input type="hidden" id="iHateIE" name="iHateIE" value="1412289092666">
					</div>

					<div class="container" id="password_container">
						<span id="password_label">Generated Password:</span>
						<span id="password_display"></span>
					</div>
				</fieldset>
			</form>
		</div>
	</div>

	<!-- Print the contestant array -->
	<!--?
	srand((double)microtime() * 10000000);
	$originalArray = array("red", "blue", "green", "brown", "cyan", "magenta", "purle", "cheezy");
	$pickOne = array_rand($originalArray, 1);
	$aRandomSelection = $originalArray[$pickOne ];
	echo "$aRandomSelection was the random selection made";
	?-->

</body>
</html>