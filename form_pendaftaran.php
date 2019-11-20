<!DOCTYPE html>
<html>
<head>
    <title>PENDAFTARAN ANGGOTA</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="kotak_login">
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
            <input type="submit" name="send" value="DAFTAR" class="tombol_daftar">
        </p>
    </form>
</div>
</body>
</html>