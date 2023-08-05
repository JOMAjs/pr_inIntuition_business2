<div class="col-xl-10 col-lg-12 col-md-9">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Bienvenido al Group!</h1>
								</div>
								<form class="user" method="post">
									<?php 
										
										$ingreso = new FormsControlador();
										$ingreso -> Ingreso();
									
									?>
									<div class="form-group">
										<input type="email" id="" class="form-control form-control-user"
										placeholder="Ingresar correo" name="ingresoEmail">
									</div>
									<div class="form-group">
										<input type="password" name="ingresoContrasena" class="form-control form-control-user"
										 placeholder="Password">
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox small">
											<input type="checkbox" class="custom-control-input" id="customCheck">
											<label class="custom-control-label" for="customCheck">Remember
												Me</label>
											</div>
										</div>
										<button  class="btn btn-primary btn-user btn-block">
											Login
										</button>
									</form><br>
									<div class="text-center">
										<a class="small" href="registro">Registrate Aqui!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
