<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="<?= base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">

	<title>Pendaftaran Online</title>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto">
					<a class="nav-link active me-4" aria-current="page" href="<?= base_url("/") ?>">Home</a>
					<a class="nav-link me-4" href="<?= base_url('auth/jadwal') ?>">Jadwal Dokter</a>
					<a class="btn btn-primary" style="border-radius: 30px" href="<?= base_url('auth/regist') ?>">Registrasi</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- End Of Navbar -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 offset-lg-1" style="margin-top: 50px;">
				<!-- card -->
				<div class="card shadow p-3 mb-5 bg-body" style="height: 650px; border-radius:15px;">
					<div class="card-body">
						<div class="text-center">
							<h3>Jadwal Dokter</h3>
							<h4>Puskesmas Lenteng Agung</h4>
							<!-- tabel -->
							<table class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Hari</th>
										<th scope="col">Dokter</th>
										<th scope="col">Poli</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($dokter as $data) : ?>
										<tr>
											<th>
												<?= $no++ ?>
											</th>
											<td>
												<?= $data['hari'] ?>
											</td>
											<td>
												<?= $data['dokter'] ?>
											</td>
											<td>
												<?= $data['poli'] ?>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
							<!-- end of tabel -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="<?= base_url('assets') ?>/js/bootstrap.bundle.min.js"></script>


</body>

</html>