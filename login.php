<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center mt-3">
			<div class="col-lg-4">
			<div class="card shadow p-3">
		<form action="proseslogin.php" method="post" onSubmit="return validasi()">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">

			<label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password ..">
            <input type="checkbox" name="setcookie" value="true"> Remember me
            </p>
			<input type="submit" class="btn btn-success w-100" value="LOGIN"></p>
			<a href="form_pendaftaran.php" class="btn btn-primary w-100">DAFTAR</a></div>
            

		</form>
		
	</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}

</body>
</html>