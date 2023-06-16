<section class="content-header">
	<h1>
		Profil Sekolah
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
					<h3 class="box-title">Ubah Profil</h3>
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
				<form action="<?= base_url($this->session->userdata('level') . '/updateProfil') ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<input type="hidden" class="form-control" name="id_profil" value="<?= $profil['id_profil']; ?>" />
						</div>

						<div class="form-group">
							<label>Nama Sekolah</label>
							<input class="form-control" name="nama_sekolah" value="<?= $profil['nama_sekolah']; ?>" required />
						</div>

						<div class="form-group">
							<label>alamat</label>
							<input class="form-control" name="alamat" value="<?= $profil['alamat']; ?>" required />
						</div>

						<div class="form-group">
							<label>Akreditasi</label>
							<select name="akreditasi" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php
								//cek data yg dipilih sebelumnya
								if ($profil['akreditasi'] == "A") echo "<option value='A' selected>A</option>";
								else echo "<option value='A'>A</option>";

								if ($profil['akreditasi'] == "B") echo "<option value='B' selected>B</option>";
								else echo "<option value='B'>B</option>";

								if ($profil['akreditasi'] == "C") echo "<option value='C' selected>C</option>";
								else echo "<option value='C'>C</option>";
								?>
							</select>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?= base_url($this->session->userdata('level') . '/profil') ?>" title="Kembali" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>