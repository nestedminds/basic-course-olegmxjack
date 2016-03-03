<?PHP

if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$errors = false;

			if(!User::checkName($name)){$errors[] = 'name not ok';}

			if(!User::checkEmail($email)){$errors[] = 'email not ok';}

			if(!User::checkPassword($password)){$errors[] = 'password not ok';}

			if($errors == false)
			{
				
				User::reg($name, $email, $password);
				echo 'It\'s OK!!<br>';

			}
			else
			{
				foreach ($errors as $value) {
					echo $value.'<br>';
				}
			}

			}
			if($errors !== false)
			{
				echo '
					<!DOCTYPE html>
					<html>
						<head>
							<title>task 013</title>
						</head>
					<body>
						<form action="#" method="POST">
						<input type="text" name="name" placeholder="Ім\'я"><br>
						<input type="email" name="email" placeholder="E-mail"><br>
						<input type="password" name="password" placeholder="Пароль" ><br><br>
						<input type="submit" name="submit" value="Реєстрація">
						<br><br>
						</form>
					</body>
					</html>';
			}
			
class Db
{
	public static function getConnection()
	{
		$host = 'localhost';
		$db = 'test';
		$user = 'root';
		$pass = '';
		$charset = 'utf8';

		$dsn = "mysql:hoost=$host;dbname=$db;charset=$charset";

		$opt = array(
			PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC
					);
		try
		{
			$pdo = new PDO($dsn, $user, $pass, $opt);
		}
		catch(PDOException $e)
		{
			die('PDO_ERROR'.$e->getMessage() );
		}

		return $pdo;
	}
}

class User
{
	public function reg($name, $email, $password)
	{
		$db = Db::getConnection();

		$sql = 'INSERT INTO user (name, email, password) '
		. 'VALUES (:name, :email, :password)';

		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':password', $password, PDO::PARAM_STR);

		return $result->execute();
		
	}


	public static function checkName($name)
	{
		if(strlen($name)>=2)
		{
			return true;
		}
		
		return false;
	}

	public static function checkPassword($password)
	{
		if(strlen($password)>=6)
		{
			return true;
		}

		return false;
	}
	public static function checkEmail($email)
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return true;
		}

		return false;
	}
}

$browserType = array('Firefox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera', 'Other');
class Select
{
	private $name = '';
	private $value = '';

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
	}


	public function getValue()
	{
		return $this->value;
	}
	public function setValue(array $value)
	{
		$this->value = $value;
	}

	public function makeSelect()
	{
		echo '<select name="'.$this->name.'">';
		$option = $this->value;
		foreach ($option as $value) {
			echo '<option value="'.$value.'">';
			echo $value;
			echo '</option>';
		}
	}



}

$obj = new Select;
$obj->setName('browser');
$obj->setValue($browserType);
$obj->makeSelect();

