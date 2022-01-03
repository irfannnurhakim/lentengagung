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
						<!-- Gambar -->
						<div class="row">
							<div class="col-lg-5">
								<img src="<?= base_url('assets/img/cover.png') ?>" alt="" class="" style="width:400px; height:600px">
							</div>

							<!-- form -->
							<div class="col-lg-7">
								<div class="text-center mt-5">
									<h1>Pendaftaran Online</h1>
									<h4>Puskesmas Lenteng Agung</h4>
									<p class="text-muted">Silakan isi form dibawah untuk melakukan pendaftaran kunjungan!</p>
								</div>
								<div class="col-lg-10 offset-lg-1">
									<div class="card-body">
										<?= ($this->session->flashdata('regist')); ?>
										<?= ($this->session->flashdata('berhasil')); ?>
										<form method="POST" action="<?= base_url('') ?>">
											<table class="table table-borderless">
												<tbody>
													<tr>
														<td><label for="exampleFormControlInput1" class="form-label">NIK</label></td>
														<td><input type="text" class="form-control" name="nik" placeholder="Nomer Induk Kependudukan" required></td>
													</tr>
													<tr>
														<td><label for="exampleFormControlInput1" class="form-label">POLI</label></td>
														<td><select class="form-select" aria-label="Default select example" name="poli" required>
																<option selected disabled>Pilih Poli</option>
																<option>Poli Umum</option>
																<option>Poli Gigi</option>
																<option>Poli Imunisasi</option>
															</select></td>
													</tr>
												</tbody>
											</table>
											<div class="d-grid gap-2">
												<button class="btn btn-primary" name="antre" type="submit">Daftar</button>
											</div>
										</form>

										<!-- Divider Text -->
										<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
											<div class="border-bottom w-100 ml-5"></div>
											<span class="px-2 small text-muted font-weight-bold text-muted">Atau</span>
											<div class="border-bottom w-100 mr-5"></div>
										</div>


										<!-- Already Registered -->
										<div class="text-center w-100">
											<p class="text-muted fw-bold">Belum Pernah Mendaftar? <a href="<?= base_url('auth/regist') ?>" class="text-decoration-none h5 ml-2">Registrasi</a></p>
										</div>
									</div>
								</div>
							</div>
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