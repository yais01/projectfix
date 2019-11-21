<!DOCTYPE html>
<html>
<head>
    <title>PENDAFTARAN ANGGOTA</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
    <div class="row justify-content-center mt-3">
			<div class="col-lg-4">
			<div class="card shadow p-3">
		<form>
        <form method="POST" action="prosespendaftaran.php">
        <label>Username</label>
        <input type="text" name="username" class="form_login">
        <label>Alamat</label>
        <input type="textarea" name="alamat" class="form_login">
        <label>Tanggal lahir</label>
        <input type="date" name="tgl_lahir" class="form_login">
        <label>Jenis Kelamin</label>
        <select class="form_login" name="jenis_kelamin">
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>
        <label>E-mail</label>
        <input type="email" name="email" class="form_login" >
        <label>Password</label>
        <input type="password" name="password" class="form_login" >
        <label>Scan KTP</label>
        <input type="file" name="scan_ktp" class="form_login" >
        <p>
            <input type="submit" name="send" value="DAFTAR" class="btn btn-primary w-100">
        </p>
    </form>
    </div>
</div>
</div>
</div>
</body>
</html>