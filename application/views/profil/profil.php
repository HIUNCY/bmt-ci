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

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header">
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
				<table class="table table-bordered table-striped text-center">
					<thead>
						<tr>
							<th>Nama Sekolah</th>
							<th>Alamat</th>
							<th>Akreditasi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<?php echo $dataSekolah['nama_sekolah']; ?>
							</td>
							<td>
								<?php echo $dataSekolah['alamat']; ?>
							</td>
							<td>
								Akreditasi
								<?php echo $dataSekolah['akreditasi']; ?>
							</td>
							<td>
								<a href="<?= base_url($this->session->userdata('level') . '/edit-profil') ?>" title="Ubah" class="btn btn-success">
									<i class="glyphicon glyphicon-edit"></i>
								</a>
							</td>
						</tr>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</section>