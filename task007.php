<?PHP 


$arr = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

function getList($arr)
{

	foreach ($arr as $value) {
	echo $value.', ';}

	asort($arr);
	foreach ($arr as $value) {
		echo '<ul><li>'.$value.'</li></ul>';}
}

getList($arr);
$arr[] = 'Los Angeles';
$arr[] = 'Calcutta';
$arr[] = 'Osaka';
$arr[] = 'Beijing';
getList($arr);