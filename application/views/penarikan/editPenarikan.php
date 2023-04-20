<section class="content-header">
	<h1>
		Transaksi
		<small>Ubah Tarikan</small>
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
					<h3 class="box-title">Ubah Tarikan</h3>
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
				<form action="<?= base_url($this->session->userdata('level') . '/updatePenarikan') ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<input type="hidden" class="form-control" name="id_tabungan" class="form-control" value="<?= $penarikan['id_tabungan']; ?>" readonly />
						</div>

						<div class="form-group">
							<label>Siswa</label>
							<select name="nis" id="nis" class="form-control select2" style="width: 100%; ">
								<option selected="">-- Pilih --</option>
								<?php
								foreach ($dataSiswa as $siswa) {
								?>
									<option value="<?= $siswa['nis'] ?>" <?= $penarikan['nis'] == $siswa['nis'] ? "selected" : null ?>>
										<?= $siswa['nama_siswa'] ?>
									</option>
								<?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Tarikan</label>
							<input type="text" class="form-control" id="tarik" name="tarik" value="Rp <?= number_format(($penarikan['tarik']), 0, '', '.') ?>" />
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?= base_url($this->session->userdata('level') . '/penarikan') ?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<script type="text/javascript">
	var tarik = document.getElementById('tarik');
	tarik.addEventListener('keyup', function(e) {
		tarik.value = formattarik(this.value, 'Rp ');
	});

	/* Fungsi formattarik */
	function formattarik(angka, prefix) {
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split = number_string.split(','),
			sisa = split[0].length % 3,
			tarik = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? '.' : '';
			tarik += separator + ribuan.join('.');
		}

		tarik = split[1] != undefined ? tarik + ',' + split[1] : tarik;
		return prefix == undefined ? tarik : (tarik ? 'Rp ' + tarik : '');
	}
</script>