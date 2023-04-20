<section class="content-header">
	<h1>
		Master Data
		<small>siswa</small>
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
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah siswa</h3>
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
				<form action="<?= base_url($this->session->userdata('level') . '/updateSiswa') ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<label>NIS</label>
							<input type='text' class="form-control" name="nis" value="<?= $siswa['nis']; ?>" readonly>
						</div>

						<div class="form-group">
							<label>Nama siswa</label>
							<input class="form-control" name="nama_siswa" value="<?= $siswa['nama_siswa']; ?>" />
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jekel" id="jekel" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
								//cek data yg dipilih sebelumnya
								if ($siswa['jekel'] == "LK") echo "<option value='LK' selected>LK</option>";
								else echo "<option value='LK'>LK</option>";

								if ($siswa['jekel'] == "PR") echo "<option value='PR' selected>PR</option>";
								else echo "<option value='PR'>PR</option>";
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Kelas</label>
							<select name="id_kelas" id="id_kelas" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
								foreach ($dataKelas->result_array() as $kelas) {
								?>
									<option value="<?= $kelas['id_kelas'] ?>" <?= $siswa['id_kelas'] == $kelas['id_kelas'] ? "selected" : null ?>>
										<?= $kelas['kelas'] ?>
									</option>
								<?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Th Masuk</label>
							<input class="form-control" name="th_masuk" value="<?= $siswa['th_masuk']; ?>">
						</div>

						<div class="form-group">
							<label>Status</label>
							<select name="status" id="status" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
								//cek data yg dipilih sebelumnya
								if ($siswa['status'] == "Aktif") echo "<option value='Aktif' selected>Aktif</option>";
								else echo "<option value='Aktif'>Aktif</option>";

								if ($siswa['status'] == "Lulus") echo "<option value='Lulus' selected>Lulus</option>";
								else echo "<option value='Lulus'>Lulus</option>";

								if ($siswa['status'] == "Pindah") echo "<option value='Pindah' selected>Pindah</option>";
								else echo "<option value='Pindah'>Pindah</option>";
								?>
							</select>
						</div>


					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?= base_url($this->session->userdata('level') . '/siswa') ?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>