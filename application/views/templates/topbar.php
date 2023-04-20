<header class="main-header">
	<!-- Logo -->
	<a href="<?= base_url('/admin') ?>" class="logo">
		<span class="logo-lg">
			<img src="<?= base_url('assets/') ?>dist/img/logoo.png" alt="logo" width="100">
		</span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->
				<li class="dropdown messages-menu">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span>
							<b>
								<?php
								$sekolah = $this->db->get('tb_profil')->row_array();
								echo $sekolah['nama_sekolah'];
								?>
							</b>
						</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>