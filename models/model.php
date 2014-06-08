<?php

set_include_path(get_include_path() . PATH_SEPARATOR . $_SESSION['path']);

require_once 'includes/data.php';

class Conexion
{
	private function conectar()
	{
		$con = mysqli_connect(HOST,USER, PASS) or die ('Error con la conexion');
		mysqli_select_db($con,DB);

		return $con;
	}

	public function insert($login, $pass, $name, $surname, $mail, $birth)
	{
		$con = $this->conectar();
		$query = "INSERT INTO user (login,password,name,last_name,email,birth_date) values ('$login','$pass','$name','$surname','$mail','$birth')";
		mysqli_query($con,$query) or die ('Error en el ingreso');
	}

	public function getAll()
	{
		$con = $this->conectar();
		$query = "SELECT * FROM user";
		$result = mysqli_query($con,$query) or die ('No se pudo mostrar');

		return $result;
	}

	public function getArticulos()
	{
		$con = $this->conectar();
		//$query = "SELECT user.login,article.id_article,article.title,article.date FROM user,article
		//			WHERE user.id_user = article.id_user";
		$query = "SELECT user.login, article.id_article, article.title, DATE_FORMAT(article.date, '%W %M %d %Y') AS date,
					DATE_FORMAT(article.date, '%r') AS time, GROUP_CONCAT( tag.name ) AS tag
					FROM user
					INNER JOIN article ON user.id_user = article.id_user
					INNER JOIN article_tag ON article.id_article = article_tag.id_article
					INNER JOIN tag ON article_tag.id_tag = tag.id_tag
					GROUP BY article.id_article";
		$result = mysqli_query($con,$query) or die ('No se pudieron mostrar los articulos');

		return $result;
	}

	public function getArticuloById($id)
	{
		$con = $this->conectar();
		$query = "SELECT user.login,article.title,article.body FROM user,article 
					WHERE (article.id_article = '$id' AND article.id_user = user.id_user)";
		$result = mysqli_query($con,$query) or die ('No se pudo mostrar el articulo');

		return $result;
	}

}

?>