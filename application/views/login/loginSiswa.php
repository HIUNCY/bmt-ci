<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login | B M T</title>
	<link rel="icon" href="<?= base_url('assets/dist/img/logoo.png') ?>">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css') ?>">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="#">
				<img src="<?= base_url('assets/dist/img/logoo.png') ?>" alt="logo" width="300">
			</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg"><b>Login Siswa</b></p>

			<form action="<?= base_url('auth/cekLoginSiswa') ?>" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="username" placeholder="Username" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="btnLogin" title="Masuk Sistem">
					<b>Masuk</b>
				</button>
			</form>
			<!-- /.social-auth-links -->

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 2.2.3 -->
	<script src="<?= base_url('assets/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!-- iCheck -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<!-- sweet alert -->
</body>

</html>