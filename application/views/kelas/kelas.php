<section class="content-header">
	<h1>
		Master Data
		<small>Kelas</small>
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
	<div class="box box-primary">
		<div class="box-header with-border">
			<a href="<?= base_url($this->session->userdata('level') . '/tambah-kelas') ?>" title="Tambah Data" class="btn btn-primary">
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
							<th>Kelas</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>

						<?php
						$i = 1;
						foreach ($dataKelas->result_array() as $kelas) {
						?>

							<tr>
								<td>
									<?= $i++; ?>
								</td>
								<td>
									<?= $kelas['kelas']; ?>
								</td>
								<td>
									<a href="<?= base_url($this->session->userdata('level') . '/edit-kelas/') . $kelas['id_kelas'] ?>" title="Ubah" class="btn btn-success">
										<i class="glyphicon glyphicon-edit"></i>
									</a>
									<a href="<?= base_url($this->session->userdata('level') . '/deleteKelas/') . $kelas['id_kelas'] ?>" onclick="return confirm('Yakin Hapus Data Ini ?')" title="Hapus" class="btn btn-danger">
										<i class="glyphicon glyphicon-trash"></i>
										</i>
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