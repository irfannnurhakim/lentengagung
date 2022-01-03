<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Jadwal Dokter</h1>

	<div class="row">
		<div class="col-lg">
			<div class="card" style="width: 600px;">
				<div class="card-body">
					<form method="POST" class="needs-validation" novalidate>
						<div class="mb-3">
							<input name="id" type="text" value="<?= $dokter['id'] ?>" hidden>
							<label for="" class="form-label">Hari</label>
							<input type="text" name="hari" class="form-control" id="" value="<?= $dokter['hari'] ?>">
						</div>
						<div class="mb-3">
							<label for="" class="form-label">Dokter</label>
							<input type="text" name="dokter" class="form-control" id="" value="<?= $dokter['dokter'] ?>">
						</div>
						<div class="mb-3">
							<label for="" class="form-label">Poli</label>
							<input type="text" name="poli" class="form-control" id="" value="<?= $dokter['poli'] ?>">
						</div>
						<button type="submit" class="btn btn-primary" name="submit">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
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
