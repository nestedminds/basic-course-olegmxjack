<!DOCTYPE html>
<html>
<head>
	<title>task 3</title>
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
			$data = array_count_values($data);
			asort($data);
			end($data);
			$result = key($data);
			echo $result;
		}  
?>
</body>
</html>