<!DOCTYPE html>
<html>
<head>
	<title>task 4</title>
</head>
<body>
<form action="#" method="POST">
	<input type="text" name="data" placeholder="Enter data">
	<input type="submit" value="go">
		
</form>
<?php if(isset($_POST['data'])&&!empty($_POST['data']))
		{
			$data = $_POST['data'];
			$data = explode(',', $data);
			foreach ($data as $value) {
				echo $value.' ';
			}
			echo '<br>';
			$data = array_reverse($data);
			foreach ($data as $value) {
				echo $value.' ';
			}
		}  
?>
</body>
</html>