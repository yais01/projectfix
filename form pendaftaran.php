<!DOCTYPE html>
<html>
<head>
	<title>PENDAFTARAN ANGGOTA</title>

</head>
<body>
<div class="kotak">
    <form>
        <label>Username</label>
        <input type="text" name="username">
        <label>Alamat</label>
        <input type="textarea" name="alamat">
        <label>Tanggal lahir</label>
        <input type="date" name="tgl_lahir">
        <label>Jenis Kelamin</label>
        <select>
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>
        <label>E-mail</label>
        <input type="email" name="email">
        <label>Password</label>
        <input type="password" name="password">
        <label>Scan KTP</label>
        <input type="file" name="scan_ktp">
        <p>
            <input type="button" name="button" value="DAFTAR">
        </p>
    </form>
</div>
</body>
</html>