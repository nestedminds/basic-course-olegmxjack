<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?PHP 
$arr = array('Automobile', 'Jet', 'Ferry', 'Subway');

if(!isset($_COOKIE['arr'])){setcookie('arr', serialize($arr), time()+60);}
if(isset($_POST['newArr'])&&!empty($_POST['newArr']))
{
	if(!preg_match('/^[a-zA-Z,]+/', $_POST['newArr'])){die('wrong data');}
	$arr = unserialize($_COOKIE['arr']);
	$newArr = explode(',', $_POST['newArr']);
	$arr = array_merge($arr,$newArr);
	setcookie('arr', serialize($arr), time()+60);

}

echo 'Travel takes many forms, whether 
	  across town, across the country, 
	  or around the world. Here is a 
	  list of some common modes of 
	  transportation:';
echo '<ul>';

if(isset($_COOKIE['arr']))
{
$list = unserialize($_COOKIE['arr']);
foreach ($list as $value) {
	echo $value.'<br>';}
}
if(isset($newArr))
{
foreach ($newArr as $value) {
	echo $value.'<br>';
	}
}
?>

<form action="#" method="POST">
	<input type="text" name="newArr">
	<?php if(isset($_POST['newArr'])) 
	{echo '<input type="submit" value="Add more?" name="reload">';}
	else{echo'<input type="submit" value="Go" name="add">';} ?>
</form>




</body>
</html>




