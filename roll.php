<!DOCTYPE html>
<html>
<head>
	<title>Dice Roll Simulation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include('includes/header.php'); ?>
	
	<div class="container">
		<h1>Dice Roll Simulation Results</h1>
		
		<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$num_dice = $_POST['num_dice'];
				$dice_type = $_POST['dice_type'];
				
				$total = 0;
				$rolls = array();
				
				for ($i = 0; $i < $num_dice; $i++) {
					$roll = rand(1, $dice_type);
					$total += $roll;
					array_push($rolls, $roll);
				}
				
				echo '<p>Number of dice rolled: ' . $num_dice . '</p>';
				echo '<p>Type of dice: d' . $dice_type . '</p>';
				echo '<p>Total count of the dice rolled: ' . $total . '</p>';
				echo '<p>Details of the individual dice rolls:</p>';
				
				echo '<ul>';
				foreach ($rolls as $roll) {
					echo '<li>' . $roll . '</li>';
				}
				echo '</ul>';
			}
			else {
				echo '<p>No data submitted.</p>';
			}
		?>
		
		<a href="index.php">Roll Again</a>
	</div>
	
	<?php include('includes/footer.php'); ?>
</body>
</html>
