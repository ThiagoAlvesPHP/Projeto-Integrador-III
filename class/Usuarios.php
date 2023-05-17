<?php
date_default_timezone_set('America/Sao_Paulo');
class Usuarios
{
	private $db;

	const TABLE = "usuarios";

	public function __construct()
	{
		$file = file_get_contents('class/config.json');
		$options = json_decode($file, true);

		$config = array();

		$config['db'] = $options['db'];
		$config['host'] = $options['localhost'];
		$config['user'] = $options['user'];
		$config['pass'] = $options['pass'];

		try {
			$this->db = new PDO("mysql:dbname=" . $config['db'] . ";host=" . $config['host'] . "", "" . $config['user'] . "", "" . $config['pass'] . "");
		} catch (PDOException $e) {
			echo "FALHA: " . $e->getMessage();
		}
	}

	/**
	 * registrar usuario
	 */
	public function set($params)
	{
		$fields = [];
		foreach ($params as $key => $value) {
			$fields[] = "$key=:$key";
		}
		$fields = implode(', ', $fields);
		$sql = $this->db->prepare("INSERT INTO " . Usuarios::TABLE . " SET {$fields}");

		foreach ($params as $key => $value) {
			$sql->bindValue(":{$key}", $value);
		}
		$sql->execute();

		return $this->db->lastInsertId();
	}

	/**
	 * Validação e email
	 */
	public function validateEmail($email)
	{
		$sql = "SELECT * FROM ".Usuarios::TABLE." WHERE email = '{$email}'";
		$sql = $this->db->query($sql);
		
		return (!$sql->rowCount()) ? false : true;
	}

	/**
	 * Validação se usuario esta logado ou não
	 */
	public function validateLogado()
	{
		if(!isset($_SESSION['lg'])){
			header('Location: login.php');
			exit;
		}
	}

	/**
	 * Login
	 */
	public function login($params)
	{
		$sql = "SELECT * FROM ".Usuarios::TABLE." WHERE email = '{$params['email']}' AND senha = '{$params['senha']}'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			return $sql->fetch(PDO::FETCH_ASSOC);
		} else {
			return false;
		}
	}
}
