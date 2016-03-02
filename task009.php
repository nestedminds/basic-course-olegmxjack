<!DOCTYPE html>
<html>
<head>
	<title>task 9</title>
</head>
<body>
<form action="#" method="POST">
	<select name="city">
		<option>Tokyo</option>
		<option>Mexico City</option>
		<option>New York City</option>
		<option>Mumbai</option>
		<option>Seoul</option>
		<option>Shanghai</option>
		<option>Lagos</option>
		<option>Buenos Aires</option>
		<option>Cairo</option>
		<option>London</option>
	</select>
	<input type="submit" value="GO">
</form>
</body>
</html>
<?PHP  
$arr = array('Japan'=>'Tokyo',
			 'Mexico'=>'Mexico City',
			 'USA'=>'New York City',
			 'India'=>'Mumbai',
			 'Korea'=>'Seoul',
			 'China'=>'Shanghai',
			 'Nigeria'=>'Lagos',
			 'Argentina'=>'Buenos Aires',
			 'Egypt'=>'Cairo',
			 'England'=>'London');

if(isset($_POST['city'])&&!empty($_POST['city']))
{
	$city = $_POST['city'];
	foreach ($arr as $key => $value) {
		if($value==$city)
		{
			echo "$city is in $key";
		}
	}
}