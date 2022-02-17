<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
		<div class="sidebar-brand-icon rotate-n-15">

		</div>
		<div class="sidebar-brand-text mx-3 font-weight-bold">CV.HARILAB PRODUCTION<sup></sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('dashboard') ?>">

			<span>HOME</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<?php if ($this->session->akses_level == "Admin") : ?>
		<!-- Heading -->
		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="<?php echo base_url('user') ?>" aria-expanded="true" aria-controls="collapseTwo">
				<span>Data User</span>
			</a>
			<!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">user:</h6>
				<a class="collapse-item" href="<?php echo base_url('user') ?>">tabel</a>
				<a class="collapse-item" href="<?php echo base_url('user/tambah') ?>">tambah</a>
			</div>
		</div> -->
		</li>
	<?php endif ?>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="<?php echo base_url('project') ?>" aria-expanded="true" aria-controls="collapseUtilities">
			<span>PROJECT</span>
		</a>
		<!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Data Project</h6>
				<a class="collapse-item" href="<?php echo base_url('project') ?>">Tabel Project</a>
				<a class="collapse-item" href="<?php echo base_url('project/tambah') ?>">Tambah Project</a>
				
			</div>
		</div> -->
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">

	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<!-- <li class="nav-item">
		<a class="nav-link collapsed" href="<?php echo base_url('infoperusahaan') ?>" aria-expanded="true" aria-controls="collapsePages">
			<span>Info CV Harilab Production+</span>
		</a>
		 <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">sub menu:</h6>

				<a class="collapse-item" href="forgot-password.html">hirarki perusahaan</a>
				
			</div>
		</div> -->
	</li>



	<!-- Nav Item - Tables -->
	<li class="nav-item">
		<a class="nav-link" href="login">
			<span>LOG OUT</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->