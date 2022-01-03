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
								<div class="text-center">
									<h1>Pendaftaran Online</h1>
									<h4>Puskesmas Lenteng Agung</h4>
									<p class="text-muted">Silakan isi form dibawah untuk melakukan pendaftaran Akun!</p>
									<?= ($this->session->flashdata('unregist')) ?>
								</div>
								<div class="col-lg-10 offset-lg-1">
									<div class="card-body">
										<form method="POST" action="<?= base_url('auth/regist') ?>">
											<table class="table table-borderless">
												<tbody>
													<tr>
														<td><label for="exampleFormControlInput1" class="form-label">NIK</label></td>
														<td><input type="text" class="form-control" name="nik" placeholder="Nomer Induk Kependudukan" required></td>
													</tr>
													<tr>
														<td><label for="exampleFormControlInput1" class="form-label">Nama</label></td>
														<td><input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required></td>
													</tr>
													<tr>
														<td><label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label></td>
														<td><input type="text" class="form-control" name="tmptlahir" placeholder="Tempat Lahir" required></td>
													</tr>
													<tr>
														<td><label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label></td>
														<td><input type="date" class="form-control" name="tgllahir" placeholder="Tanggal Lahir" required></td>
													</tr>
													<tr>
														<td><label for="exampleFormControlInput1" class="form-label">Alamat</label></td>
														<td><textarea type="text" class="form-control" name="alamat" placeholder="Alamat" required></textarea></td>
													</tr>
												</tbody>
											</table>
											<div class="d-grid gap-2">
												<button class="btn btn-primary" name="regist" type="submit">Daftar</button>
										</form>
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
