<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Registration Page</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css'); ?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/iCheck/square/blue.css'); ?>">
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="../../index2.html"><b>Admin</b>LTE</a>
		</div>

		<div class="register-box-body">
			<p class="login-box-msg">Register a new membership</p>

			<form action="<?= site_url('auth/register'); ?>" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="firstname" placeholder="First name" value="<?= set_value('firstname'); ?>">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
					<?= form_error('firstname', '<small class="text-danger">', '</small>'); ?>
				</div>

				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="lastname" placeholder="Last name" value="<?= set_value('lastname'); ?>">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
					<?= form_error('lastname', '<small class="text-danger">', '</small>'); ?>
				</div>

				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="login" placeholder="Login" value="<?= set_value('login'); ?>">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					<?= form_error('login', '<small class="text-danger">', '</small>'); ?>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password_confirm" placeholder="Retype password">
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
					<?= form_error('password_confirm', '<small class="text-danger">', '</small>'); ?>
				</div>

				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">
							<label>
								<input type="checkbox" name="terms" value="1"> I agree to the <a href="#">terms</a>
							</label>
						</div>
						<?= form_error('terms', '<small class="text-danger">', '</small>'); ?>
					</div>

					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
					</div>
				</div>
			</form>


			<div class="social-auth-links text-center">
				<p>- OR -</p>
				<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
					Facebook</a>
				<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
					Google+</a>
			</div>

			<a href="login.html" class="text-center">I already have a membership</a>
		</div>
		<!-- /.form-box -->
	</div>
	<!-- /.register-box -->

	<!-- jQuery 3 -->
	<script src="<?= base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?= base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	<!-- iCheck -->
	<script src="<?= base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>
	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</body>

</html>
