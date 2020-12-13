<!DOCTYPE html>
<html lang="en">
<?php
include '../../connected.php';
?>

<?php
// $db->checkLogin();
if (isset($_POST['login'])) {
	$user_name = $_POST['email'];
	$cl_password = $_POST['password'];

	if ($user_name == '' || $cl_password == '') {
		$_SESSION["isLogin"] = "Tài khoản và mật khẩu không được để trống!";
	} else {

		$sql = "SELECT * FROM customer WHERE email='$user_name' AND password='$cl_password' ";
		$db->execute($sql);

		if ($db->num_rows() > 0) {
			header('location: ../home/index.php');
			$_SESSION['name-admin'] = 'admin';
		} else {
			$_SESSION["isLogin"] = "Tài khoản hoặc mật khẩu sai!";
		}
	}
}

?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title> Login with estate </title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?= $ADMIN_URL ?>/assets/img/favicon.png">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/font-awesome.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/admin.css">

</head>

<body>
	<div class="main-wrapper">

		<div class="login-page">
			<div class="login-body container">
				<div class="loginbox">
					<div class="login-right-wrap">
						<div class="account-header">
							<div class="account-logo text-center mb-4">
								<a href="index-2.html">
									<img src="<?= $ADMIN_URL ?>/assets/img/logo-icon.png" alt="" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="login-header">
							<h3>Login <span>Estate</span></h3>
						</div>
						<form method="POST">
							<div class="form-group">
								<label class="control-label">Username</label>
								<input name="email" class="form-control" type="text" placeholder="Enter your email">
							</div>
							<div class="form-group mb-4">
								<label class="control-label">Password</label>
								<input name="password" class="form-control" type="password" placeholder="Enter your password">
							</div>
							<div class="text-center">
								<button name="login" class="btn btn-primary btn-block account-btn" type="submit">Login</button>
							</div>

							<?php

							if ($_SESSION['isLogin']) {
								echo "<p class='pt-3 text-center' style='color: purple'> 🍀" . $_SESSION['isLogin'] . "</p>";
							}

							?>
						</form>

						<!-- <div class="text-center forgot-pass mt-4"><a href="forgot-password.html">Forgot Password?</a></div>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div> -->

						<!-- /Social Login -->

						<!-- <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?= $ADMIN_URL ?>/assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="<?= $ADMIN_URL ?>/assets/js/popper.min.js"></script>
	<script src="<?= $ADMIN_URL ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="<?= $ADMIN_URL ?>/assets/js/admin.js"></script>

</body>


</html>