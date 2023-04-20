<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Tabungan
		<small>Siswa</small>
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
			<i class="icon fa fa-info"></i> Info Tabungan
		</h4>

		<h4>
			Total Setoran :
			<?= rupiah($setor['Tsetor']); ?>
		</h4>
		<h4>
			Total Tarikan :
			<?= rupiah($tarik['Ttarik']); ?>
		</h4>
		<hr>
		<h3>Saldo Tabungan :
			<?= rupiah($setor['Tsetor'] - $tarik['Ttarik']) ?>
		</h3>
	</div>


	<div class="box box-primary">
		<div class="box-header">
			<a href="<?= base_url($this->session->userdata('level') . '/tabungan') ?>" class="btn btn-primary">
				<i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
			<a href="<?= base_url($this->session->userdata('level') . '/cetak-tabungan/') . $this->input->post('nis') ?>" target=" _blank" class="btn btn-default">
				<i class="glyphicon glyphicon-print"></i> Cetak</a>
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
							<th>Tarikan</th>
							<th>Petugas</th>
						</tr>
					</thead>
					<tbody>

						<?php
						$i = 1;
						foreach ($dataTabungan as $tabungan) {
						?>

							<tr>
								<td>
									<?= $i++; ?>
								</td>
								<td>
									<?= $tabungan['nis']; ?>
								</td>
								<td>
									<?= $tabungan['nama_siswa']; ?>
								</td>
								<td>
									<?php $tgl = $tabungan['tgl'];
									echo date("d/M/Y", strtotime($tgl)) ?>
								</td>
								<td align="right">
									<?= rupiah($tabungan['setor']); ?>
								</td>
								<td align="right">
									<?= rupiah($tabungan['tarik']); ?>
								</td>
								<td>
									<?= $tabungan['petugas']; ?>
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