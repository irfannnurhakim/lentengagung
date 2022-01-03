<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/landingPage') ?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-hospital"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Lenteng Agung</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin/landingPage') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Interface
			</div>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin/datapasien') ?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Data Pasien</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin/pendaftaran') ?>">
					<i class="fas fa-fw fa-calendar-alt"></i>
					<span>Data Pendaftaran</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin/jadwalDokter') ?>">
					<i class="fas fa-fw fa-calendar-alt"></i>
					<span>Jadwal Dokter</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->