<?php
require_once "conexion.php";

class ModeloFormularios	 {
	static public function Registro($tabla, $datos) {
		#prepare() prepara una sentencia SQL para ser ejecutada. Los parámetros ocultos (:var1, :var2, ...) ayudan a prevenir inyecciones SQL.
		$stmt = Conexion::Conectar() -> prepare("INSERT INTO $tabla (token, 
		                                                             nombre,
																	 apellido,
																	 sele_telefono,
																	 telefono,
																	 pais,
																	 email, 
																	 contrasena,
																	 comida_favorita,
																	 lugar_favorito,
																	 artista_favorito,
																	 color_favorito,
																	 estado) 
		                                                     VALUES (:token, 
							                                           :nombre,
							                                           :apellido,
							                                           :sele,
							                                           :telefono,
							                                           :pais, 
							                                           :correo,
							                                           :contrasena,
							                                           :comida_favorita,
							                                           :lugar_favorito,
							                                           :artista_favorito,
							                                           :color_favorito,
							                                 2)");

		#bindParam() vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
		$stmt -> bindParam(":token", $datos["token"], PDO::PARAM_STR);
		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt -> bindParam(":sele", $datos["sele"], PDO::PARAM_STR);
		$stmt -> bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt -> bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
		$stmt -> bindParam(":correo", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":contrasena", $datos["contrasena"], PDO::PARAM_STR);
		$stmt -> bindParam(":comida_favorita", $datos["comida_favorita"], PDO::PARAM_STR);
		$stmt -> bindParam(":lugar_favorito", $datos["lugar_favorito"], PDO::PARAM_STR);
		$stmt -> bindParam(":artista_favorito", $datos["artista_favorito"], PDO::PARAM_STR);
		$stmt -> bindParam(":color_favorito", $datos["color_favorito"], PDO::PARAM_STR);

		if ($stmt -> execute()) { return "ok"; }
		else { print_r(Conexion::Conectar() -> errorInfo()); }

		#Cierra la conexión.
		$stmt -> close();

		#Refuerzo de seguridad.
		$stmt = null;
	}



	static public function SeleccionarRegistros($tabla, $item = null, $valor = null) {
		if ($item == null && $valor == null) {
			$stmt = Conexion::Conectar() -> prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y - %r') AS fecha FROM $tabla ORDER BY id DESC");
			$stmt -> execute();

			#fetchAll Devuelve todos los registros.
			return $stmt -> fetchAll();
		}
		else {
			$stmt = Conexion::Conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		}
		
		#Cierra la conexión.
		$stmt -> close();

		#Refuerzo de seguridad.
		$stmt = null;
	}

	static public function SeleccionarRegistros2($tabla, $item = null, $valor = null) {
		if ($item == null && $valor == null) {
			$stmt = Conexion::Conectar() -> prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y - %r') AS fecha FROM registro JOIN mis_favoritos AS mf ON (mf.usuario_id = registro.id) WHERE estado = 2 ORDER BY id DESC");
			$stmt -> execute();

			#fetchAll Devuelve todos los registros.
			return $stmt -> fetchAll();
		}
		else {
			$stmt = Conexion::Conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		}
		
		#Cierra la conexión.
		$stmt -> close();

		#Refuerzo de seguridad.
		$stmt = null;
	}


	static public function ActualizarRegistro($tabla, $datos) {
		$stmt = Conexion::Conectar() -> prepare("UPDATE $tabla SET nombre = :nombre,
		                                                           apellido = :apellido,
		                                                           email = :correo,
															       token = :ntoken WHERE token = :token");
		$stmt -> bindParam(":token", $datos["token"], PDO::PARAM_STR);
		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt -> bindParam(":correo", $datos["email"], PDO::PARAM_STR);

		$stmt -> bindParam(":ntoken", $datos["ntoken"], PDO::PARAM_STR);

		if ($stmt -> execute()) { return "ok"; }
		else { print_r(Conexion::Conectar() -> errorInfo()); }

		$stmt -> close();
		$stmt = null;
	}

	static public function EliminarRegistro($tabla, $valor) {
		$stmt = Conexion::Conectar() -> prepare("DELETE FROM $tabla WHERE token = :token");
		$stmt -> bindParam(":token", $valor, PDO::PARAM_STR);

		if ($stmt -> execute()) { return "ok"; }
		else { print_r(Conexion::Conectar() -> errorInfo()); }

		$stmt -> close();
		$stmt = null;
	}

	static public function ActualizarIntentos($tabla, $valor, $token) {
		$stmt = Conexion::Conectar() -> prepare("UPDATE $tabla SET intentos = :intentos WHERE token = :token");
		$stmt -> bindParam(":intentos", $valor, PDO::PARAM_STR);
		$stmt -> bindParam(":token", $token, PDO::PARAM_STR);

		if ($stmt -> execute()) { return "ok"; }
		else { print_r(Conexion::Conectar() -> errorInfo()); }

		$stmt -> close();
		$stmt = null;
	}
} 
?>