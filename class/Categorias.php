<?php
class Categorias
{
	private $db;

	const TABLE = "categorias";

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
		$sql = $this->db->prepare("INSERT INTO " . Categorias::TABLE . " SET {$fields}");

		foreach ($params as $key => $value) {
			$sql->bindValue(":{$key}", $value);
		}
		$sql->execute();

		return $this->db->lastInsertId();
	}

	/**
	 * Lista de treinos
	 */
	public function getAll()
	{
		$sql = "SELECT * FROM ".Categorias::TABLE."";
		$sql = $this->db->query($sql);

		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * Treino po id
	 */
	public function get($id)
	{
		$sql = "SELECT * FROM ".Categorias::TABLE." WHERE id = '{$id}'";
		$sql = $this->db->query($sql);

		return $sql->fetch(PDO::FETCH_ASSOC);
	}
}
