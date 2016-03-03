<!DOCTYPE html>
<html>
<head>
	<title>task 010</title>
<style type="text/css">
    td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
    th {text-align:center;}  
    table {border-collapse: collapse; border: 1px solid black;}
</style>
</head>
<body>



<?php

$arr = array(
			'Tokyo'=>array('Japan', 'Asia'),
			'Mexico City'=>array('Mexico', 'North America'),
			'New York City'=>array('USA', 'North America'),
			'Mumbai'=>array('India', 'Asia'),
			'Seoul'=>array('Korea', 'Asia'),
			'Shanghai'=>array('China', 'Asia'),
			'Lagos'=>array('Nigeria', 'Africa'),
			'Buenos Aires'=>array('Argentina', 'South America'),
			'Cairo'=>array('Egypt', 'Africa'),
			'London'=>array('UK', 'Europe')

	);?>
<table>
	<tr>
		<th>City</th><th>Country</th><th>Continent</th>
	</tr>
	<?PHP 
		foreach ($arr as $key => $value) {
			echo "<tr> <td>$key</td>";
			for ($i=0; $i < count($value); $i++) { 
				echo '<td>'.$value[$i].'</td>';
			}
			echo '</tr>';
		}
	?>
</table>
</body>
</html>