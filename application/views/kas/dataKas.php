<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Transaksi
		<small>Info Kas</small>
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

	<!-- /.box-header -->
	<div class="box box-primary">
		<div class="box-header">
			Saldo Tabungan (Kas)
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
							<th>Total Setoran</th>
							<th>Total Tarikan</th>
							<th>Saldo Tabungan</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td>
								<a href="<?= base_url($this->session->userdata('level') . '/setoran') ?>" class="btn btn-success btn-sm">
									<i class="glyphicon glyphicon-info-sign" title="Detail"> </i>
								</a>
								<?= rupiah($setor['Tsetor']); ?>
							</td>
							<td>
								<a href="<?= base_url($this->session->userdata('level') . '/penarikan') ?>" class="btn btn-danger btn-sm">
									<i class="glyphicon glyphicon-info-sign" title="Detail"> </i>
								</a>
								<?= rupiah($tarik['Ttarik']); ?>
							</td>
							<td>
								<?= rupiah($setor['Tsetor'] - $tarik['Ttarik']); ?>
							</td>
						</tr>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</section>