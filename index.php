<!DOCTYPE html>
<html>
<body>
<table>
<?php
$numero = 7;
for ($i = 1; $i <=10; $i++) {
	$resultat = $numero * $i ;
    echo "<tr>";
    echo "	<td>$numero * $i</td>";
    echo "	<td>$resultat</td>";
    echo "</tr>";
}
?>
</table>    
</body>
</html>