<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];

if(! is_null($id)){
	$data_calon = $db->get_by_id($id);
}else{
	header('location:tampildata.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Calon Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_calon['id']; ?>"/>
<table>
<tr>
		<td>Nama Siswa</td>
		<td>:</td>
        <td><input type="text" name="nama" value="<?php echo $data_calon['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Kota Kelahiran</td>
		<td>:</td>
		<td><input type="text" name="tempat" value="<?php echo $data_calon['tempat']; ?>"/></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tgllahir" value="<?php echo $data_calon['tgllahir']; ?>"/></td>
	</tr>
	<tr>
		<td>Warga Negara</td>
		<td>:</td>
		<td><input type="text" name="wn" value="<?php echo $data_calon['wn']; ?>"/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" value="<?php echo $data_calon['alamat']; ?>"/></td>
	</tr>
    <tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" value="<?php echo $data_calon['email']; ?>"/></td>
	</tr>
    <tr>
		<td>Nomor HP</td>
		<td>:</td>
		<td><input type="text" name="nohp" value="<?php echo $data_calon['nohp']; ?>"/></td>
	</tr>
    <tr>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td><input type="text" name="asal" value="<?php echo $data_calon['asal']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><input type="text" name="ayah" value="<?php echo $data_calon['ayah']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><input type="text" name="ibu" value="<?php echo $data_calon['ibu']; ?>"/></td>
	</tr>
    <tr>
		<td>Penghasilan Orang Tua</td>
		<td>:</td>
		<td><input type="text" name="penghasilan" value="<?php echo $data_calon['penghasilan']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>