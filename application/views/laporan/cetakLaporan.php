<!DOCTYPE html>
<html lang="en">

<head>
	<title>BMT - Laporan Tabungan</title>
</head>

<body>
	<center>
		<h2>Laporan Tabungan Siswa</h2>
		<p>Periode :
			<?= date("d-M-Y", strtotime($this->input->post('tgl_1'))) ?>
			s/d
			<?= date("d-M-Y", strtotime($this->input->post('tgl_2'))) ?>
		<p>_________________________________________________________________________________________</p>

		<table border="1" cellspacing="0" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Tanggal</th>
					<th>Petugas</th>
					<th>Pemasukan</th>
					<th>Pengeluaran</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				foreach ($dataLaporan as $laporan) {
				?>
					<tr>
						<td>
							<?= $i; ?>
						</td>
						<td>
							<?= date("d/M/Y", strtotime($laporan['tgl'])) ?>
							&emsp;&emsp;&emsp;
						</td>
						<td>
							<?= $laporan['petugas']; ?>
							&emsp;&emsp;&emsp;
						</td>
						<td align="right">
							&emsp;&emsp;&emsp;
							<?= rupiah($laporan['setor']); ?>
						</td>
						<td align="right">
							&emsp;&emsp;&emsp;
							<?= rupiah($laporan['tarik']); ?>
						</td>
					</tr>
				<?php
					$i++;
				}
				?>
			</tbody>
			<tr>
				<td colspan="3">Total Setoran</td>
				<td colspan="2">
					<?= rupiah($setor['Tsetor']); ?>
				</td>
			</tr>
			<tr>
				<td colspan="4">Total Penarikan</td>
				<td colspan="1">
					<?= rupiah($tarik['Ttarik']); ?>
				</td>
			</tr>
			<tr>
				<td colspan="3">Saldo Tabungan</td>
				<td colspan="2">
					<?= rupiah($setor['Tsetor'] - $tarik['Ttarik']); ?>
				</td>
			</tr>
		</table>
	</center>

	<script>
		window.print();
	</script>
</body>

</html>