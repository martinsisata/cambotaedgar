<?php
class Contacto {
	public $db;
	public function __construct(){
		$db = new Database();
		$this -> db = $db -> instance();
		$this -> sendContact();
	}

	public function sendContact(){
		if ($_POST) {
			try {

				$query = $this -> db -> prepare("INSERT INTO phpoo (nome, mensagem) VALUES (:nome, :mensagem)");
				$query -> bindValue (":nome",$_POST ['nome'], PDO::PARAM_STR);
				$query -> bindValue (":mensagem", $_POST ['mensagem'], PDO::PARAM_STR);
				$query -> execute();
				echo "Esta goood";



			}catch (PDOException $e){
				echo "Tem Problema";
			}
		}
	}
}

?>