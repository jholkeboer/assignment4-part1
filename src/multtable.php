<!doctype html>
<head>
</head>
<body>
<?php
	//import variables from GET
	$min_multiplicand = @$_GET['min-multiplicand'] + 0;
	$max_multiplicand = @$_GET['max-multiplicand'] + 0;
	$min_multiplier = @$_GET['min-multiplier'] + 0;
	$max_multiplier = @$_GET['max-multiplier'] + 0;
?>

<table border="1px">
	<!-- Top Row -->
	<tr>
		<td></td>
		<?php
		for ($i = $min_multiplier; $i <= $max_multiplier; $i++) {
			?> <td> <?php echo $i; ?> </td> <?php
		}	
		?>
	</tr>
	<?php
	for ($j = $min_multiplicand; $j <= $max_multiplicand; $j++) {
		?> <tr> <td> <?php echo $j; ?> </td> <?php
		for ($k = $min_multiplier; $k <= $max_multiplier; $k++) {
			?> <td> <?php echo $j * $k  ?> </td> <?php
		}
		?> </tr> <?php
	}	
	?>
</table>


Any errors listed below:<br>
<?php if ($min_multiplicand > $max_multiplicand): ?>
Error: Minimum multiplicand greater than maximum<br>
<?php endif ?>
<?php if ($min_multiplier > $max_multiplier): ?> 
Error: Minimum multiplier greater than maximum<br>
<?php endif ?>
<?php if (!(is_int($min_multiplicand))): ?>
Error: Minimum multiplicand must be an integer.<br>
<?php endif ?>
<?php if (!(is_int($max_multiplicand))): ?>
Error: Maximum multiplicand must be an integer.<br>
<?php endif ?>
<?php if (!(is_int($min_multiplier))): ?>
Error: Minimum multiplier must be an integer.<br>
<?php endif ?>
<?php if (!(is_int($max_multiplier))): ?>
Error: Maximum multiplier must be an integer.<br>
<?php endif ?>
</body>