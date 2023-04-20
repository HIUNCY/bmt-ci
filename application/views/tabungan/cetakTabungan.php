<center>

	<h3><?= $dataSekolah['nama_sekolah'] ?></h3>
	<p><?= $dataSekolah['alamat'] ?></p>
	<p>___________________________________________________________________</p>

	<tbody>
		<tr>
			<td>NIS</td>
			<td>:</td>
			<td>
				<?= $dataSiswa['nis']; ?>
			</td>
		</tr>
		<br>
		<tr>
			<td>Nama Siswa</td>
			<td>:</td>
			<td>
				<?= $dataSiswa['nama_siswa']; ?>
			</td>
		</tr>
		<br>
		<br>
	</tbody>

	<table border="1" cellspacing="0" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>No.</th>
				<th>Tanggal</th>
				<th>Pemasukan</th>
				<th>Pengeluaran</th>
				<th>Petugas</th>
			</tr>
		</thead>


		<tbody>

			<?php
			$i = 1;
			foreach ($dataCetak as $cetak) {
			?>
				<tr>
					<td>
						<?php echo $i; ?>
					</td>
					<td>
						<?= date("d/M/Y", strtotime($cetak['tgl'])) ?>
					</td>
					<td align="right">
						<?= rupiah($cetak['setor']); ?>
					</td>
					<td align="right">
						<?= rupiah($cetak['tarik']); ?>
					</td>
					<td>
						<?= $cetak['petugas']; ?>
					</td>
				</tr>
			<?php
				$i++;
			}
			?>
		</tbody>
		<tr>
			<td colspan="2">Total Setoran</td>
			<td colspan="3">
				<?= rupiah($setor['Tsetor']) ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">Total Penarikan</td>
			<td colspan="3">
				<?= rupiah($tarik['Ttarik']) ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">Saldo Tabungan</td>
			<td colspan="3">
				<?= rupiah($setor['Tsetor'] - $tarik['Ttarik']) ?>
			</td>
		</tr>
	</table>

</center>
<script>
	window.print();
</script>