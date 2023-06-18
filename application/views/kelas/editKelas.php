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

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah Kelas</h3>
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
				<form action="<?= base_url($this->session->userdata('level') . '/updateKelas') ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<input type='hidden' class="form-control" name="id_kelas" value="<?= $kelas['id_kelas']; ?>" readonly />

						<div class="form-group">
							<label>Kelas</label>
							<input class="form-control" name="kelas" value="<?= $kelas['kelas']; ?>" required />
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?= base_url($this->session->userdata('level') . '/kelas') ?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>