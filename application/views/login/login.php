<body class="bg-gradient-primary">
	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-lg-5">

				<div class="card o-hidden border-0 shadow-lg" style="margin-top: 200px;">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
										<?php if ($this->session->flashdata('salah_login')) : ?>
											<div class="alert alert-danger" role="alert">
												Email atau Password yang Anda masukan salah!
											</div>
										<?php elseif ($this->session->flashdata('belum_login')) : ?>
											<div class="alert alert-danger" role="alert">
												Anda Belum Login!
											</div>
										<?php endif ?>
									</div>
									<form class="user" method="POST" action="<?= base_url('admin') ?>">
										<div class="form-group">
											<input type="email" name="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Alamat Email....">
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control form-control-user" placeholder="Password">
										</div>
										<button type="submit" name="login" class="btn btn-primary btn-user btn-block">
											Login
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
