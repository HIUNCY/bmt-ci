<section class="content-header">
	<h1>
		Pengguna Sistem
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
					<h3 class="box-title">Ubah Pengguna</h3>
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
				<form action="<?= base_url($this->session->userdata('level') . '/updatePengguna') ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<input type='hidden' class="form-control" name="id_pengguna" value="<?= $pengguna['id_pengguna']; ?>" readonly />
						</div>

						<div class="form-group">
							<label>Nama Pengguna</label>
							<input class="form-control" name="nama_pengguna" value="<?= $pengguna['nama_pengguna']; ?>" />
						</div>

						<div class="form-group">
							<label>Username</label>
							<input class="form-control" name="username" value="<?= $pengguna['username']; ?>" />
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" name="password" id="pass" value="<?= $pengguna['password']; ?>" />
							<input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox">
							<label for="mybutton">Lihat password</label>
						</div>

						<div class="form-group">
							<label>Level</label>
							<select name="level" id="level" class="form-control" required>
								<option value="">-- Pilih Level --</option>
								<?php
								//menhecek data yg dipilih sebelumnya

								if ($pengguna['level'] == "Administrator") echo "<option value='Administrator' selected>Administrator</option>";
								else echo "<option value='Administrator'>Administrator</option>";

								if ($pengguna['level'] == "Petugas") echo "<option value='Petugas' selected>Petugas</option>";
								else echo "<option value='Petugas'>Petugas</option>";

								?>
							</select>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?= base_url($this->session->userdata('level') . '/pengguna') ?>" title="Kembali" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>
<script type="text/javascript">
	function change() {
		var x = document.getElementById('pass').type;

		if (x == 'password') {
			document.getElementById('pass').type = 'text';
			document.getElementById('mybutton').innerHTML;
		} else {
			document.getElementById('pass').type = 'password';
			document.getElementById('mybutton').innerHTML;
		}
	}
</script>