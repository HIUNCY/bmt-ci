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

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Siswa</h3>
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
				<!-- form start -->
				<form action="<?= base_url($this->session->userdata('level') . '/createSiswa') ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label>NIS</label>
							<input type="text" name="nis" id="nis" class="form-control" placeholder="NIS">
						</div>

						<div class="form-group">
							<label>Nama Siswa</label>
							<input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="Nama Siswa">
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jekel" id="jekel" class="form-control" required>
								<option>-- Pilih --</option>
								<option>LK</option>
								<option>PR</option>
							</select>
						</div>

						<div class="form-group">
							<label>Kelas</label>
							<select name="id_kelas" id="id_kelas" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
								foreach ($dataKelas as $kelas) {
								?>
									<option value="<?= $kelas['id_kelas'] ?>">
										<?= $kelas['kelas'] ?>
									</option>
								<?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Tahun Masuk</label>
							<input type="number" name="th_masuk" id="th_masuk" class="form-control" placeholder="Th Masuk">
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="<?= base_url($this->session->userdata('level') . '/siswa') ?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>