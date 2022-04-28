<!DOCTYPE html>
<html>
<body>
<?php
echo "<table>";
for ($i = 1; $i <= 100; $i++){
	echo "<tr> \n";
	for ($j = 1; $j <= 100; $j++){
		$x = $i*$j;
		echo "<td>$x</td> \n";
	}
	echo"<tr>";
}
echo "</table>";
?>

</body>
</html>