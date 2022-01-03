<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Pendaftaran</h1>
	<div class="button mb-3">
		<a href="<?= base_url('admin/offline') ?>" class="btn btn-primary">Tambah Pasien Offline</a>
		<a href="<?= base_url('admin/deleteAll') ?>" class="btn btn-danger">Hapus Data Hari ini</a>
	</div>
	<?php if ($this->session->flashdata('berhasil')) : ?>
		<div class="alert alert-success" role="alert">
			Pendaftar Offline Berhasil ditambahkan!
		<?php elseif ($this->session->flashdata('dihapus')) : ?>
			<div class="alert alert-danger" role="alert">
				Pendaftaran Hari ini telah dihapus!
			</div>
		<?php endif ?>
		<table class="table table-hover mb-5">
			<thead>
				<tr>
					<th rowspan="2" class="align-middle text-center">#</th>
					<th rowspan="2" class="align-middle text-center">Nik</th>
					<th rowspan="2" class="align-middle text-center">Nama</th>
					<th rowspan="2" class="align-middle text-center">poli</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($pendaftaran as $data) : ?>
					<tr>
						<th class="align-middle text-center"><?= $no++ ?></th>
						<td class="align-middle text-center"><?= $data['nik'] ?></td>
						<td class="align-middle text-center"><?= $data['nama'] ?></td>
						<td class="align-middle text-center"><?= $data['poli'] ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>


		</div>
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Your Website 2020</span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
