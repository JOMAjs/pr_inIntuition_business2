<?php
#Indica que se trabajarán variables de sesión.
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Webplot Con MVC</title>
	
	<!-- Custom fonts for this template-->
	<link href="vistas/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	
	<link
	href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">
	
	<!-- Custom styles for this template-->
	
	

	<link href="vistas/css/sb-admin-2.min.css" rel="stylesheet">

	<script src="vistas/plugins/jquery/jquery.js"></script>
	<script src="vistas/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body class="bg-gradient-default">
	<?php if (isset($_GET["pagina"])){  ?>
		<?php if (  $_GET["pagina"] == "inicio" || $_GET["pagina"] == "salir" || $_GET["pagina"] == "editar") 
		    {include "paginas/".$_GET["pagina"].".php"; }  
			
			elseif ( $_GET["pagina"] == "ingreso" ) { ?>
			<div class="container">
				<div class="row justify-content-center">
				     <?php  include "paginas/".$_GET["pagina"].".php"; ?>
				</div>
			</div>
		<?php } elseif($_GET["pagina"] == "registro"){ ?>
			<div class="container">
		     	<?php  include "paginas/registro.php"; ?>
		    </div>
		<?php } ?>
	
	<?php } else { ?>
		<div class="container">
			<?php  include "paginas/registro.php"; ?>
		</div>
<?php } ?>


	<script src="vistas/js/sb-admin-2.min.js"></script>
    <script src="vistas/js/script.js"></script>
	<script src="vistas/js/main.js"></script>
</body>
</html>