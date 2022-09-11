<?php
@ob_start();
session_start();
if (isset($_POST['proses'])) {
	require 'config.php';

	$user = strip_tags($_POST['user']);
	$pass = strip_tags($_POST['pass']);

	$sql = 'select member.*, login.user, login.pass
				from member inner join login on member.id_member = login.id_member
				where user =? and pass = md5(?)';
	$row = $config->prepare($sql);
	$row->execute(array($user, $pass));
	$jum = $row->rowCount();
	if ($jum > 0) {
		$hasil = $row->fetch();
		$_SESSION['admin'] = $hasil;
		echo '<script>alert("Login Sukses");window.location="index.php"</script>';
	} else {
		echo '<script>alert("Login Gagal");history.go(-1);</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword">
	<title>ORIONWAY LOGIN</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-responsive.css" rel="stylesheet">
</head>

<body style="background-color: #dedede;">
	<div id="login-page" style="padding-top:3pc;">
		<div class="container">
			<form class="form-login" method="POST">
				<h2 class="form-login-heading" style="font-weight: bold;">ORIONWAY</h2>
				<div class="login-wrap">
					<input type="text" class="form-control" name="user" placeholder="User ID" autofocus>
					<br>
					<input type="password" class="form-control" name="pass" placeholder="Password">
					<br>
					<button class="btn btn-primary btn-block" name="proses" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
				</div>
			</form>

		</div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>