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

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Tarikan</h3>
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
				<form action="<?= base_url($this->session->userdata('level') . '/createPenarikan') ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<?= $this->session->flashdata('note') ?>
						<div class="form-group">
							<label>Siswa</label>
							<select name="nis" id="nis" class="form-control select2" style="width: 100%;" required>
								<option selected="selected">-- Pilih --</option>
								<?php
								foreach ($dataSiswa as $siswa) {
								?>
									<option value="<?= $siswa['nis'] ?>">
										<?= $siswa['nis'] ?>
										-
										<?= $siswa['nama_siswa'] ?>
									</option>
								<?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Saldo Tabungan</label>
							<input type="text" name="saldo" id="saldo" class="form-control" placeholder="Saldo" readonly>
						</div>

						<div class="form-group">
							<label>Tarikan</label>
							<input type="text" name="tarik" id="tarik" class="form-control" placeholder="Jumlah tarikan" required>
						</div>


					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Tarik" class="btn btn-success">
						<a href="<?= base_url($this->session->userdata('level') . '/penarikan') ?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<script src="<?= base_url('assets') ?>/bootstrap/lookup.js"></script>
<script>
	$(document).ready(function() {
		$('#nis').change(function() {
			var nis = $(this).val();
			$.ajax({
				url: "<?= base_url('assets/plugins/proses-ajax.php') ?>",
				method: "POST",
				data: {
					nis: nis
				},
				success: function(data) {
					$('#saldo').val(data);
				}
			});
		});
	});
</script>

<script type="text/javascript">
	var tarik = document.getElementById('tarik');
	tarik.addEventListener('keyup', function(e) {
		// tambahkan 'Rp.' pada saat form di ketik
		// gunakan fungsi formattarik() untuk mengubah angka yang di ketik menjadi format angka
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