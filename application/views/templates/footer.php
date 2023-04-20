</section>
<!-- /.content -->
</div>
<footer class="main-footer">
	<div class="text-center">
		Copyright &copy; 2023 &bull; Tugas Kelompok Web Programming III <br> Muhamad Zainul Kamal &bull; Rahmat Arayyan &bull; Hilal Alfadila &bull; Masda Samosir
	</div>
</footer>
<div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets/') ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>

<script src="<?= base_url('assets/') ?>plugins/select2/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
<!-- page script -->


<script>
	$(function() {
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});
</script>

<script>
	$(function() {
		//Initialize Select2 Elements
		$(".select2").select2();
	});
</script>
</body>

</html>