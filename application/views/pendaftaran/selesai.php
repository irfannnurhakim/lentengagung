<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pendaftaran Online</title>
	<link href="<?= base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
	<div class="card o-hidden border-0 shadow-lg col-lg-7 mx-auto" style="margin-top: 100px;">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row ">
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h5>ANDA MERUPAKAN PASIEN URUTAN KE <?= $total; ?></h5>
							<?php if ($total < 10) : ?>
								<h5>Silakan Datang pada pukul 08:00</h5>
							<?php elseif ($total < 20) : ?>
								<h5>Silakan Datang pada pukul 08:30</h5>
							<?php elseif ($total < 30) : ?>
								<h5>Silakan Datang pada pukul 09:00</h5>
							<?php elseif ($total < 40) : ?>
								<h5>Silakan Datang pada pukul 09:30</h5>
							<?php endif ?>
							<?php if ($this->session->flashdata('berhasil')) : ?>
								<div class="alert alert-success" role="alert">
									Selamat! Anda sudah terdaftar.
								</div>
							<?php endif ?>
							<img src="<?= base_url('assets/img/cover.png') ?>" alt="" class="img-fluid mb-3 d-none d-md-block">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
