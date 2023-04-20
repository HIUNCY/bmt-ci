		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<b>
					<div class="user-panel">
						<div class="pull-left image">
							<img src="<?= base_url('assets/') ?>dist/img/avatar.png" class="img-circle" alt="User Image">
						</div>
						<div class="pull-left info">
							<p>
								<?= $this->session->userdata('nama'); ?>
							</p>
							<span class="label label-success">
								<?php
								if ($this->session->userdata('level') == 'admin') {
									echo 'Administrator';
								} elseif ($this->session->userdata('level') == 'staff') {
									echo 'Petugas';
								} elseif ($this->session->userdata('level') == 'siswa') {
									echo 'Siswa';
								}
								?>
							</span>
						</div>
					</div>
					</br>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li class="treeview">
							<a href="<?= base_url($this->session->userdata('level')) ?>">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>

						<?php
						if ($this->session->userdata('level') !== 'admin') {
							echo '';
						} elseif ($this->session->userdata('level') == 'admin') {
						?>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-folder"></i>
									<span>Manajemen Data</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">

									<li>
										<a href="<?= base_url($this->session->userdata('level') . '/siswa') ?>">
											<i class="fa fa-users"></i>Siswa</a>
									</li>
									<li>
										<a href="<?= base_url($this->session->userdata('level') . '/kelas') ?>">
											<i class="fa fa-chalkboard-user"></i>Kelas</a>
									</li>
								</ul>
							</li>
						<?php
						}
						?>

						<?php
						if ($this->session->userdata('level') == 'siswa') {
							echo '';
						} else {
						?>

							<li class="treeview">
								<a href="#">
									<i class="fa fa-money-bill-transfer"></i>
									<span>Transaksi</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">

									<li>
										<a href="<?= base_url($this->session->userdata('level') . '/setoran') ?>">
											<i class="fa fa-plus"></i>Setoran
										</a>
									</li>
									<li>
										<a href="<?= base_url($this->session->userdata('level') . '/penarikan') ?>">
											<i class="fa fa-minus"></i>Penarikan
										</a>
									</li>
									<li>
										<a href="<?= base_url($this->session->userdata('level') . '/kas') ?>">
											<i class="fa fa-money-bill-trend-up"></i>Info Kas
										</a>
									</li>
								</ul>
							</li>

						<?php } ?>

						<?php
						if ($this->session->userdata('level') == 'siswa') {
						?>

							<li class="treeview">
								<a href="<?= base_url($this->session->userdata('level') . '/tabungan-siswa/') . $this->session->userdata('nis') ?>">
									<i class="fa fa-rupiah-sign"></i>
									<span>Tabungan</span>
									<span class="pull-right-container">
									</span>
								</a>
							</li>

						<?php } else { ?>

							<li class="treeview">
								<a href="<?= base_url($this->session->userdata('level') . '/tabungan') ?>">
									<i class="fa fa-rupiah-sign"></i>
									<span>Tabungan</span>
									<span class="pull-right-container">
									</span>
								</a>
							</li>

						<?php } ?>

						<?php
						if ($this->session->userdata('level') == 'siswa') {
							echo '';
						} else {
						?>

							<li class="treeview">
								<a href="<?= base_url($this->session->userdata('level') . '/laporan') ?>">
									<i class="fa fa-file-invoice"></i>
									<span>Laporan</span>
									<span class="pull-right-container">
									</span>
								</a>
							</li>

						<?php } ?>

						<li class="header">SETTING</li>

						<?php
						if ($this->session->userdata('level') == 'admin') {
						?>

							<li class="treeview">
								<a href="<?= base_url($this->session->userdata('level') . '/pengguna') ?>">
									<i class="fa fa-user-shield"></i>
									<span>Manajemen Staff</span>
									<span class="pull-right-container">
									</span>
								</a>
							</li>

							<li class="treeview">
								<a href="<?= base_url($this->session->userdata('level') . '/profil') ?>">
									<i class="fa fa-bank"></i>
									<span>Profil Sekolah</span>
									<span class="pull-right-container">
									</span>
								</a>
							</li>

						<?php } else {
							echo '';
						} ?>

						<li>
							<a href="<?= base_url('auth/logout') ?>" onclick="return confirm('Anda yakin keluar dari aplikasi ?')">
								<i class="fa fa-sign-out"></i>
								<span>Logout</span>
								<span class="pull-right-container"></span>
							</a>
						</li>

			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			<section class="content">