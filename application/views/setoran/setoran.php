<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Transaksi
		<small>Setoran</small>
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

	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>
			<i class="icon fa fa-info"></i> Total Setoran
		</h4>
		<h3><?= rupiah($setoran['total']) ?></h3>
	</div>


	<div class="box box-primary">
		<div class="box-header">
			<a href="<?= base_url($this->session->userdata('level') . '/tambah-setoran') ?>" class="btn btn-primary">
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
							<th>Setoran</th>
							<th>Petugas</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($dataSetor as $setor) {
						?>
							<tr>
								<td>
									<?php echo $i++; ?>
								</td>
								<td>
									<?php echo $setor['nis']; ?>
								</td>
								<td>
									<?php echo $setor['nama_siswa']; ?>
								</td>
								<td>
									<?php $tgl = $setor['tgl'];
									echo date("d F Y", strtotime($tgl)) ?>
								</td>
								<td align="right">
									<?php echo rupiah($setor['setor']); ?>
								</td>
								<td>
									<?php echo $setor['petugas']; ?>
								</td>
								<td>
									<a href="<?= base_url($this->session->userdata('level') . '/edit-setoran/') . $setor['id_tabungan'] ?>" title="Ubah" class="btn btn-success btn-sm">
										<i class="glyphicon glyphicon-edit"> Edit</i>
									</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</section>