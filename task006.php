<!DOCTYPE html>
<html>
<head>
	<title>task 6</title>
</head>
<body>
<form action="#" method="POST">
	<input type="text" name="data" placeholder="Enter data">
	<input type="submit" value="go">
		
</form>
<?php if(isset($_POST['data'])&&!empty($_POST['data']))
		{
			$data = $_POST['data'];
			if(!preg_match('/^[0-9,.]+$/', $data)) {die('Not number');}
			$data = explode(',', $data);
			asort($data);
			foreach ($data as $value) {
				echo $value.' ';
			}
		}  
?>
</body>
</html>