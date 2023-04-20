<?php
include "../inc/rupiah.php";
$koneksi = new mysqli("localhost", "root", "", "bmt");

$output = '';
if (isset($_POST["nis"])) {
	$sql = "select sum(setor)-sum(tarik) as Total from tb_tabungan where nis= '" . $_POST["nis"] . "'";
	$hasil = mysqli_query($koneksi, $sql);
	while ($row = mysqli_fetch_array($hasil)) {
		$output = $row["Total"];
	}
	echo rupiah($output);
}
