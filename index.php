<!DOCTYPE html>
<html>
<head>
	<title>Dice Roll Simulation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include('includes/header.php'); ?>
	
	<div class="container">
		<h1>Dice Roll Simulation</h1>
		
		<form method="post" action="roll.php">
			<label for="num_dice">Number of Dice:</label>
			<input type="number" id="num_dice" name="num_dice" min="1" max="10" value="1" required>
			
			<label for="dice_type">Dice Type:</label>
			<select id="dice_type" name="dice_type">
				<option value="4">d4</option>
				<option value="6">d6</option>
				<option value="8">d8</option>
				<option value="10">d10</option>
				<option value="12">d12</option>
				<option value="20">d20</option>
			</select>
			
			<button type="submit">Roll Dice</button>
		</form>
	</div>
	
	<?php include('includes/footer.php'); ?>
</body>
</html>
