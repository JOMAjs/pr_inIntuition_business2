
	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
				<div class="col-lg-7">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Crea Tu Formulario al Group!</h1>
						</div>
						<form class="user" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="hidden_image" id="hidden_image" value="">
						<?php 
						    #Esto es si el método es static y retornara algo.
						    #$registro = FormsControlador::Registro();
						
						    $registro = FormsControlador::Registro();
						
						    if ($registro == "ok") {
						    	#Esto hace que el mensaje de Usuario registrado no se quede por siempre en la vista.
	                            echo '<script> if( window.history.replaceState ) {
	                            		window.history.replaceState( null; null; window.location.href );
	                            	} </script>';
	                            echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
						    }            
						
						    if ($registro == "error") {
	                            echo '<script> if( window.history.replaceState ) {
	                            		window.history.replaceState( null; null; window.location.href );
	                            	} </script>';
	                            echo '<div class="alert alert-danger">Error: entrada inválida</div>';
						    }
					    ?>

							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" name="nombre" class="form-control form-control-user" id="exampleFirstName"
									placeholder="Tu nombre">
								</div>
								<div class="col-sm-6">
									<input type="text" name="apellido" class="form-control form-control-user" id="exampleLastName"
									placeholder="Tu Apellido">
								</div>
							</div>
					
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="email" name="correo" class="form-control form-control-user"
									id="exampleInputEmail" placeholder="Correo electronico ">
								</div>
								<div class="col-sm-2">
									<input type="text" name="sele" class="form-control form-control-user"
									id="telefono" placeholder="+57" value="+57">
								</div>
								<div class="col-sm-4">
									<input type="text" name="telefono" class="form-control form-control-user"
									id="telefono" placeholder="Telefono">
								</div>
							</div>

							<div class="form-group">
								<select name="pais" id="pais" class="form-control col-4">
									<option value="">Pais</option>
									<option value="CO">Colombia</option>
									<option value="ES">España</option>
									<option value="EN">Estado unidos</option>
								</select>
							</div>
						
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" name="comida_favoritos" class="form-control form-control-user" id="exampleFirstName"
									placeholder="Comida Favorita">
								</div>
								<div class="col-sm-6">
									<input type="text" name="artista_favorito" class="form-control form-control-user" id="exampleLastName"
									placeholder="Artista Favorito">
								</div>
							</div>
						
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" name="lugar_favorito" class="form-control form-control-user" id="exampleFirstName"
									placeholder="Lugar Favorita">
								</div>
								<div class="col-sm-6">
									<input type="text" name="color_favorito" class="form-control form-control-user" id="exampleLastName"
									placeholder="Color Favorito">
								</div>
							</div>
						
							<div class="form-group">
								<input type="password" name="password" class="form-control form-control-user"
								placeholder="Contraseña">
							</div>
						
							<div class="form-group">
								<input type="file" name="imagen" id="imagenes" class="form-control"
								placeholder="foto">
							</div>
						
							<button class="btn btn-primary btn-user ">
								unirme al formulario
							</button>
						</form>
							<hr>
							<div class="text-center">
							<small>Ya tiene Cuenta.</small> <a class="small" href="ingreso"> iniciar Sesion!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


