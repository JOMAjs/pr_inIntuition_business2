<?php

if ((isset($_SESSION["validarIngreso"]) && $_SESSION["validarIngreso"] != "ok") || !isset($_SESSION["validarIngreso"])) {
	echo '<script> window.location = "ingreso"; </script>'; 
	return;	
}

if ($_SESSION["status"] == 1) {
    # code...
    $usuarios = FormsControlador::SeleccionarRegistrosInicio($_SESSION['token'], $_SESSION["status"]);
} else {
    $usuarios1 = FormsControlador::SeleccionarRegistros2($_SESSION['token'], $_SESSION["status"]);
}



?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo($_SESSION["nombre"]); ?></span>

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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard: <?php echo($_SESSION["nombre"]); ?></h1>
                        
                    </div>
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php if($_SESSION["status"] == 1): ?>
                                    <table class="table table-striped">
                                        <thead>
		                                    <tr>
		                                    	<th>No.</th>
                                                <th>Profile</th>
		                                    	<th>Nombre </th>
		                                    	<th>Email</th>
                                                <th>Telefono</th>
		                                    	<th>Pais</th>
                                                <th>Los Favoritos</th>
		                                    	<th>Acciones</th>
		                                    </tr>
	                                    </thead>
	                                    <tbody>
		                                    <?php foreach ($usuarios as $key => $value): ?>
		                                    	<tr>
		                                    		<td><?php echo $key + 1 ?></td>
		                                    		<td><img src="vistas/image/productos/<?php echo $value["imagen"]; ?>" class="img-thumbnail" width="60px" alt="" srcset=""></td>
                                                    <td><?php echo $value["nombre"]." ".$value["apellido"]; ?></td>
		                                    		<td><?php echo $value["email"]; ?></td>
                                                    <td><?php echo $value["sele_telefono"]."-".$value["telefono"]; ?></td>
		                                    		<td><?php echo $value["pais"]; ?></td>
                                                    <td>
                                                        <p class="text-lowercase"><?php echo $value["comida_favorita"]; ?></p>
                                                        <p><?php echo $value["lugar_favorito"]; ?></p>
                                                    </td>

		                                    		<td>
		                                    			<div class="btn-group">
		                                    				<div class="px-1">
		                                    				<a href="index.php?pagina=editar&token=<?php echo $value["token"]; ?>" class="btn-sm btn btn-warning"><i class="fas fa-edit"></i>Edita</a>
		                                    				</div>
		                                    				<form method="post">
		                                    					<input type="hidden" value="<?php echo $value["token"]; ?>" name="eliminarRegistro">
                                                                <input type="hidden" value="<?php echo $value["imagen"]; ?>" name="imagen">
		                                    					<button type="submit" class="btn-sm btn btn-danger"><i class="fas fa-trash-alt"></i>delete</button>

		                                    					<?php
		                                    					$eliminar = new FormsControlador();
		                                    					$eliminar -> EliminarRegistro();
		                                    					?>
		                                    				</form>
		                                    				
		                                    			</div>
		                                    		</td>
		                                    	</tr>
		                                    <?php endforeach ?>
	                                    </tbody>
                                    </table>
                                    <?php elseif($_SESSION["status"] == 2): ?>



                                        <?php foreach ($usuarios1 as $key => $value): ?>

                                            <div class="card align-center" style="width: 18rem;">
                                                <img src="vistas/image/productos/<?php echo($value['imagen']); ?>" class="card-img-top" alt="Imgae">
                                                <div class="card-body">
                                                    <h5 class="card-title">Infomacion Basica</h5>
                                                    <p class="card-text">
                                                        <strong><i class="fas fa-map-marker-alt"></i> Lugar Favorito</strong>
                                                        <p class="text-muted"><?php echo($value['lugar_favorito']); ?></p>
                                                        <hr> 
                                                        <strong><i class="fa fa-list"></i> Comida Favorita</strong>
                                                        <p class="text-muted"><?php echo($value['comida_favorita']); ?></p>
                                                        <hr>  
                                                        <strong><i class="fa fa-music"></i> Artista Favorito</strong>
                                                        <p class="text-muted"><?php echo($value['artista_favorito']); ?></p>
                                                        <hr>  
                                                         
                                                        <strong><i class="fas fa-pencil-alt"></i> Color Favorito</strong>
                                                        <p class="text-muted"><?php echo($value['color_favorito']); ?></p>
                                                        <hr>  
                                                         
                                                   
                                                    <a href="index.php?pagina=editar&token=<?php echo $value["token"]; ?>" class="btn btn-sm float-right btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                                </div>
                                            </div>                                 
                                        <?php endforeach ?> 
                                    <?php endif; ?>
                                    
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

    <script>
        $(".table").dataTables();
    </script>

