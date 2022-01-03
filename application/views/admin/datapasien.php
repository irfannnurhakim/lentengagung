<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

	<?php if ($this->session->flashdata('pesan')) : ?>
		<div class="alert alert-danger" role="alert">
			Data berhasil dihapus!
		</div>
	<?php endif ?>

	<table class="table table-hover mb-5">
		<thead>
			<tr>
				<th rowspan="2" class="align-middle text-center">#</th>
				<th rowspan="2" class="align-middle text-center">Nik</th>
				<th rowspan="2" class="align-middle text-center">Nama</th>
				<th rowspan="2" class="align-middle text-center">Tempat Lahir</th>
				<th rowspan="2" class="align-middle text-center">Tanggal Lahir</th>
				<th rowspan="2" class="align-middle text-center">Alamat</th>
				<th rowspan="2" class="align-middle text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($pasien as $data) : ?>
				<tr>
					<th class="align-middle text-center"><?= $no++ ?></th>
					<td class="align-middle text-center"><?= $data['nik'] ?></td>
					<td class="align-middle text-center"><?= $data['nama'] ?></td>
					<td class="align-middle text-center"><?= $data['tmptlahir'] ?></td>
					<td class="align-middle text-center"><?= $data['tgllahir'] ?></td>
					<td class="align-middle text-center"><?= $data['alamat'] ?></td>
					<td class="align-middle text-center">
						<a href="<?= base_url('admin/delete/') . $data['id'] ?>" class="btn btn-danger">delete</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>


</div>

</div>
<!-- End of Main Content -->









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
