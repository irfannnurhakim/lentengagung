<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Jadwal Dokter</h1>
	<div class="button mb-3">
		<a href="<?= base_url("jadwal/add") ?>" class="btn btn-primary">Tambah</a>
		<a href="<?= base_url("jadwal/deleteAll") ?>" class="btn btn-danger">Hapus Semua</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Dokter</th>
				<th scope="col">Poli</th>
				<th scope="col">Aksi</th>
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
					<td>
						<a href="<?= base_url('jadwal/edit/' . $data['id']) ?>" class="btn btn-success">Edit</a>
						<a href="<?= base_url('jadwal/delete/' . $data['id']) ?>" class="btn btn-danger">Delete</a>
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
