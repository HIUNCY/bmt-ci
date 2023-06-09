<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Transaksi
		<small>Tarikan</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url($this->session->userdata('level')) ?>">
				<i class="fa fa-home"></i>
				<b>BMT</b>
			</a>
		</li>
	</ol>
</section>
<!-- Main content -->

<section class="content">

	<!-- /.box-header -->

	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>
			<i class="icon fa fa-info"></i> Total Tarikan
		</h4>
		<h3><?= rupiah($penarikan['total']) ?></h3>
	</div>


	<div class="box box-primary">
		<div class="box-header">
			<a href="<?= base_url($this->session->userdata('level') . '/tambah-penarikan') ?>" class="btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
				<table id="example1" class="table table-bordered table-striped text-center">
					<thead>
						<tr>
							<th>No</th>
							<th>NIS</th>
							<th>Nama</th>
							<th>Tanggal</th>
							<th>Tarikan</th>
							<th>Petugas</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($dataTarik as $tarik) {
						?>
							<tr>
								<td>
									<?php echo $i++; ?>
								</td>
								<td>
									<?php echo $tarik['nis']; ?>
								</td>
								<td>
									<?php echo $tarik['nama_siswa']; ?>
								</td>
								<td>
									<?php $tgl = $tarik['tgl'];
									echo date("d/M/Y", strtotime($tgl)) ?>
								</td>
								<td align="right">
									<?php echo rupiah($tarik['tarik']); ?>
								</td>
								<td>
									<?php echo $tarik['petugas']; ?>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</section>