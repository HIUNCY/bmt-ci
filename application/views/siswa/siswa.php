<section class="content-header">
	<h1>
		Master Data
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
	<div class="box box-primary">
		<div class="box-header with-border">
			<a href="tambah-siswa" title="Tambah Data" class="btn btn-primary">
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
							<th>JK</th>
							<th>Kelas</th>
							<th>Status</th>
							<th>Th Masuk</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;

						foreach ($dataSiswa as $siswa) {
						?>
							<tr>
								<td>
									<?= $i++; ?>
								</td>
								<td>
									<?= $siswa['nis']; ?>
								</td>
								<td>
									<?= $siswa['nama_siswa']; ?>
								</td>
								<td>
									<?= $siswa['jekel']; ?>
								</td>
								<td>
									<?= $siswa['kelas']; ?>
								</td>

								<?php $warna = $siswa['status']  ?>
								<td>
									<?php if ($warna == 'Aktif') { ?>
										<span class="label label-primary">Aktif</span>
									<?php } elseif ($warna == 'Lulus') { ?>
										<span class="label label-success">Lulus</span>
									<?php } elseif ($warna == 'Pindah') { ?>
										<span class="label label-danger">Pindah</span>
								</td>
							<?php } ?>

							<td>
								<?= $siswa['th_masuk']; ?>
							</td>

							<td>
								<a href="<?= base_url($this->session->userdata('level') . '/edit-siswa/') . $siswa['nis'] ?>" title="Ubah" class="btn btn-success">
									<i class="glyphicon glyphicon-edit"></i>
								</a>
								<a href="<?= base_url($this->session->userdata('level') . '/deleteSiswa/') . $siswa['nis'] ?>" onclick="return confirm('Yakin Hapus Data Ini ?')" title="Hapus" class="btn btn-danger">
									<i class="glyphicon glyphicon-trash"></i>
									</i>
							</td>
							</tr>
						<?php } ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</section>