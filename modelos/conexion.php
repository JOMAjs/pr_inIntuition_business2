<?php
class Conexion {
	static public function Conectar() {
		#Parámetros PDO: nombreServidor, nombreBaseDatos, usuario, contraseña.
		$link = new PDO("mysql:host=localhost;dbname=db_prueba", "root", "");
		$link -> exec("set names utf8");
		return $link;
	}
}
?>