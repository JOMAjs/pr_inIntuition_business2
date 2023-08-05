<?php
if (isset($_GET["token"])) {
	$usuario = FormsControlador::SeleccionarRegistros("token", $_GET["token"]);
}
?>



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="inicio">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">

                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"  href="salir">
                                   
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard: Administrador</h1>
                        
                    </div>
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Editando a <?php //echo $usuario["nombre"]."  ".$usuario["apellido"]; ?></h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
									<form class="" method="post">
									<?php
		                                $actualizar = FormsControlador::ActualizarRegistro();

		                                if ($actualizar == "ok") {
		                                	echo '<script> 
		                                			if( window.history.replaceState ) {
		                                				window.history.replaceState( null, null, window.location.href );
		                                			} 
		                                			</script>';
		                                	echo '<script>
		                                			var datos = new FormData();
		                                			datos.append("validarToken", "'.md5($_POST["nombre"]."+".$_POST["correo"]).'");

		                                			$.ajax({
		                                				url: "ajax/formulariosAjax.php",
		                                				method: "POST",
		                                				data: datos,
		                                				cache: false,
		                                				contentType: false,
		                                				processData: false,
		                                				dataType: "json",
		                                				success: function(respuesta) {
		                                					$("#editarEmail").val(respuesta["email"]);
		                                					$("#editarNombre").val(respuesta["nombre"]);
		                                				}
		                                			});
		                                			</script>';
                                                    echo '<div class="alert alert-success">El usuario ha sido actualizado</div>';
                                                    echo '<script> window.location = "inicio"; </script>';
		                                	
		                                }
		                                if ($actualizar == "error") {
		                                	echo '<script> if( window.history.replaceState ) {
		                                			window.history.replaceState( null; null; window.location.href );
		                                			} </script>';
		                                	echo '<div class="alert alert-danger">Error al actualizar</div>';
		                                }
									?>
									<input type="hidden" name="token" value="<?php echo $usuario["token"]; ?>">
										<div class="form-row">
											<div class="form-group col-md-6">
                                                <label for="nombre">Nombre</label>
												<input value="<?php echo $usuario["nombre"]; ?>" type="text" name="nombre" class="form-control" id="nombre" placeholder="Editar Nombre">
											</div>
											<div class="form-group col-md-6">
                                                <label for="apellido">Apellido</label>
												<input value="<?php echo $usuario["apellido"]; ?>" type="text" name="apellido" class="form-control" id="nombre" placeholder="Editar apellido">
											</div>
										</div>

                                        <div class="form-row">
											<div class="form-group col-md-6">
                                                <label for="">Email</label>
												<input value="<?php echo $usuario["email"]; ?>" type="text" name="correo" class="form-control" id="nombre" placeholder="Editar Email">
											</div>
											<div class="form-group col-md-6">
                                                <label for="comida">Comida favorita</label>
												<input value="<?php echo $usuario["comida_favorita"]; ?>" type="text" name="comida_favoritos" class="form-control" id="nombre" placeholder="Editar comida">
											</div>
										</div>

										
										<div class="form-row">
											<div class="form-group col-md-6">
                                                <label for="artista_favorito">Artista Favorito</label>
												<input value="<?php echo $usuario["artista_favorito"]; ?>" type="text" name="artista_favorito" class="form-control" id="nombre" placeholder="Editar Email">
											</div>
											<div class="form-group col-md-6">
                                                <label for="color_favorito">Color Favorito</label>
												<input value="<?php echo $usuario["color_favorito"]; ?>" type="text" name="color_favorito" class="form-control" id="nombre" placeholder="Editar comida">
											</div>
										</div>

                                        <input type="password" class="form-control" placeholder="Nueva contraseña" id="pwd" name="editarContrasena">
				                         <input type="hidden" name="contrasenaActual" value="<?php echo $usuario["contrasena"]; ?>">

                                        <button  class="btn btn-primary float-right">editar</button>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>