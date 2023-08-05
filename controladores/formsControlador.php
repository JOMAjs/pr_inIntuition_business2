<?php
class FormsControlador {
	static public function Registro() {
		if (isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["password"])) {
			if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombre"]) && preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["correo"]) && preg_match('/^[0-9a-zA-Z]+$/', $_POST["password"])) {
				$token = md5($_POST["nombre"]."+".$_POST["correo"]);
				$cripto = crypt($_POST["password"], '$2a$07$cursophpadsliveandresgalv$');
				$datos = array("token" => $token, 
				                  "nombre" => $_POST["nombre"], 
				                  "apellido" =>  $_POST["apellido"], 
				                  "email" => $_POST["correo"],
				                  "sele"  => $_POST["sele"],
				                  "telefono" => $_POST["telefono"],
				                  "pais"  => $_POST["pais"],
								  "comida_favorita" => $_POST["comida_favoritos"],
								  "lugar_favorito" =>$_POST["lugar_favorito"],
								  "artista_favorito" => $_POST["artista_favorito"],
								  "color_favorito" => $_POST["color_favorito"],
				                  "contrasena" => $cripto
							);
				$respuesta = ModeloFormularios::Registro("registro", $datos);
				return $respuesta;
			}
			else {
				$respuesta = "error";
				return $respuesta;
			}
		}
	}

	static public function SeleccionarRegistros($item = null, $valor = null) {
		$respuesta = ModeloFormularios::SeleccionarRegistros("registro", $item, $valor);
		return $respuesta;
	}

	public function Ingreso() {
		if (isset($_POST["ingresoEmail"]) && isset($_POST["ingresoContrasena"])) {
			$respuesta = ModeloFormularios::SeleccionarRegistros("registro", "email", $_POST["ingresoEmail"]);
			$cripto = crypt($_POST["ingresoContrasena"], '$2a$07$cursophpadsliveandresgalv$');

			if (is_array($respuesta) && $respuesta[7] == $_POST["ingresoEmail"] && $respuesta[8] == $cripto) {
				ModeloFormularios::ActualizarIntentos("registro", 0, $respuesta["token"]);
				$_SESSION["validarIngreso"] = "ok";
				
				echo '<script> if( window.history.replaceState ) {
					window.history.replaceState( null; null; window.location.href );
				} </script>';
				echo '<script> window.location = "inicio"; </script>';
			}
			elseif ($_POST["ingresoEmail"] == "" && $_POST["ingresoContrasena"] == "") {
				echo '<div class="alert alert-warning">No se ingresaron credenciales</div>';
			}
			else {
				$respuesta["intentos"]++;

				if ($respuesta["intentos"] == 3) {
					echo '<div class="alert alert-danger">Límite de intentos superado</div>';
				}
				else {
					ModeloFormularios::ActualizarIntentos("registro", $respuesta["intentos"], $respuesta["token"]);
					echo '<script> if( window.history.replaceState ) {
						window.history.replaceState( null; null; window.location.href );
						} </script>';
					echo '<div class="alert alert-danger">Credenciales incorrectas</div>';
				}
			}
		}
	}

	static public function ActualizarRegistro() {
		if (isset($_POST["nombre"])) {
			if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombre"]) && preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["correo"])) {
				$usuario = ModeloFormularios::SeleccionarRegistros("registro", "token", $_POST["token"]);
				$CompararToken = md5($usuario[2]."+".$usuario[7]); #usuarioNombre+usuarioEmail (de la BD)

				if ($CompararToken == $_POST["token"]) {
					
					$nuevoToken = md5($_POST["nombre"]."+".$_POST["correo"]);
					$datos = array("ntoken" => $nuevoToken, 
					               "token" => $_POST["token"],
								   "nombre" => $_POST["nombre"], 
								   "apellido" =>  $_POST["apellido"], 
								   "email" => $_POST["correo"]
								  
								);
					$respuesta = ModeloFormularios::ActualizarRegistro("registro", $datos);

					
					return $respuesta;	
				}
				else {
					$respuesta = "error";
					return $respuesta;
				}
			}
			else {
					$respuesta = "error";
					return $respuesta;
				}
		}	
	}

	public function EliminarRegistro() {
		if (isset($_POST["eliminarRegistro"])) {
			$usuario = ModeloFormularios::SeleccionarRegistros("registro", "token", $_POST["eliminarRegistro"]);
			$CompararToken = md5($usuario[2]."+".$usuario[3]); #usuarioNombre+usuarioEmail

			if ($CompararToken == $_POST["eliminarRegistro"]) {
				$respuesta = ModeloFormularios::EliminarRegistro("registro", $_POST["eliminarRegistro"]);
				
				if ($respuesta == "ok") {
					echo '<script> if( window.history.replaceState ) {
						window.history.replaceState( null; null; window.location.href );
					} </script>';
					echo '<script> window.location = "inicio"; </script>';
				}
			}
		}
	}
}
?>