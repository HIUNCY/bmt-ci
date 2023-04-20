		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Dashboard
				<small>
					<?php
					if ($this->session->userdata('level') == 'admin') {
						echo 'Administrator';
					} elseif ($this->session->userdata('level') == 'staff') {
						echo 'Petugas';
					}
					?>
				</small>
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- Small boxes (Stat box) -->
			<div class="row">

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-yellow">
						<div class="inner">
							<h4>
								<?= $siswa['aktif'] ?>
							</h4>

							<p>Siswa Aktif</p>
						</div>
						<div class="icon">
							<i class="fa fa-user"></i>
						</div>
						<a href="<?= base_url($this->session->userdata('level') . '/siswa') ?>" class="small-box-footer">More info
							<i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<!-- ./col -->

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-aqua">
						<div class="inner">
							<h4>
								<?= rupiah($setor['Tsetor']); ?>
							</h4>

							<p>Total Setoran</p>
						</div>
						<div class="icon">
							<i class="fa fa-arrow-trend-up"></i>
						</div>
						<a href="<?= base_url($this->session->userdata('level') . '/setoran') ?>" class="small-box-footer">More info
							<i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<!-- ./col -->

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-red">
						<div class="inner">
							<h4>
								<?= rupiah($tarik['Ttarik']); ?>
							</h4>
							<p>Total Penarikan</p>
						</div>
						<div class="icon">
							<i class="fa fa-arrow-trend-down"></i>
						</div>
						<a href="<?= base_url($this->session->userdata('level') . '/penarikan') ?>" class="small-box-footer">More info
							<i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<!-- ./col -->

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<h4>
								<?= rupiah($setor['Tsetor'] - $tarik['Ttarik']); ?>
							</h4>
							<p>Total Saldo</p>
						</div>
						<div class="icon">
							<i class="fa fa-landmark"></i>
						</div>
						<a href="#" class="small-box-footer">More info
							<i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>

			<!-- /.box-body -->

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="box box-primary">
						<div class="box-header">
							<strong>Profil Sekolah</strong>
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse">
									<i class="fa fa-minus"></i>
								</button>
								<button type="button" class="btn btn-box-tool" data-widget="remove">
									<i class="fa fa-remove"></i>
								</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped text-center">
									<thead>
										<tr>
											<th>Nama Sekolah</th>
											<th>Alamat</th>
											<th>Akreditasi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<?= $profil['nama_sekolah'] ?>
											</td>
											<td>
												<?= $profil['alamat'] ?>
											</td>
											<td>
												Akreditasi
												<?= $profil['akreditasi'] ?>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
