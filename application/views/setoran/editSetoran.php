<section class="content-header">
	<h1>
		Transaksi
		<small>Ubah Setoran</small>
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
					<h3 class="box-title">Ubah tabungan</h3>
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
				<form action="<?= base_url($this->session->userdata('level') . '/updateSetoran') ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<input type="hidden" class="form-control" name="id_tabungan" class="form-control" value="<?= $setoran['id_tabungan']; ?>" readonly />
						</div>

						<div class="form-group">
							<label>Siswa</label>
							<select name="nis" id="nis" class="form-control select2" style="width: 100%;" required>
								<option selected="">-- Pilih --</option>
								<?php
								foreach ($dataSiswa as $siswa) {
								?>
									<option value="<?= $siswa['nis'] ?>" <?= $setoran['nis'] == $siswa['nis'] ? "selected" : null ?>>
										<?= $siswa['nama_siswa'] ?>
									</option>
								<?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Setoran</label>
							<input type="text" class="form-control" id="setor" name="setor" value="Rp <?= number_format(($setoran['setor']), 0, '', '.') ?>" required />
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?= base_url($this->session->userdata('level') . '/setoran') ?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<script type="text/javascript">
	var setor = document.getElementById('setor');
	setor.addEventListener('keyup', function(e) {
		setor.value = formatsetor(this.value, 'Rp ');
	});

	function formatsetor(angka, prefix) {
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split = number_string.split(','),
			sisa = split[0].length % 3,
			setor = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);
		if (ribuan) {
			separator = sisa ? '.' : '';
			setor += separator + ribuan.join('.');
		}

		setor = split[1] != undefined ? setor + ',' + split[1] : setor;
		return prefix == undefined ? setor : (setor ? 'Rp ' + setor : '');
	}
</script>