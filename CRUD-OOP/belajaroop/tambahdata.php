<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Calon Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=add">
<table>
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><input type="text" name="nama" required=""/></td>
	</tr>
	<tr>
		<td>Kota Kelahiran</td>
		<td>:</td>
		<td><input type="text" name="tempat" required=""/></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tgllahir" required=""/></td>
	</tr>
	<tr>
		<td>Warga Negara</td>
		<td>:</td>
		<td><input type="text" name="wn" required=""/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" required=""/></td>
	</tr>
    <tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" required=""/></td>
	</tr>
    <tr>
		<td>Nomor HP</td>
		<td>:</td>
		<td><input type="text" name="nohp" placeholder="Masukkan No Telepon" required=""/></td>
	</tr>
    <tr>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td><input type="text" name="asal" required=""/></td>
	</tr>
    <tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><input type="text" name="ayah" required=""/></td>
	</tr>
    <tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><input type="text" name="ibu" required=""/></td>
	</tr>
    <tr>
		<td>Penghasilan Orang Tua</td>
		<td>:</td>
		<td><input type="text" name="penghasilan" placeholder="Penghasilan per bulan" required=""/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>