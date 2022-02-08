<?php 	
include('koneksi.php');
$db = new database();
$data_calon = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>

	<title>Tabel Data</title>
</head>
<body>
    <br>
<center><button><a href="tambahdata.php" style= "text-decoration:none">Tambah Data</a></button></center>
<br>
<table border="1">
        <tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tempat</th>
			<th>Tanggal Lahir</th>
			<th>Warga Negara</th>
			<th>Alamat</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Asal Sekolah</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Penghasilan Orang Tua</th>
            <th>Action</th>
		</tr>
		    <?php 
		    $no = 1;
		    foreach($data_calon as $u){
			?>
			<tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['nama'] ?></td>
                <td><?= $u['tempat'] ?></td>
                <td><?= $u['tgllahir'] ?></td>
                <td><?= $u['wn'] ?></td>
                <td><?= $u['alamat'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['nohp'] ?></td>
                <td><?= $u['asal'] ?></td>
                <td><?= $u['ayah'] ?></td>
                <td><?= $u['ibu'] ?></td>
                <td><?= $u['penghasilan'] ?></td>
				<td>
					<a href="edit.php?id=<?php echo $u['id']; ?>" style= "text-decoration:none" >Update</a>
                    <a href="proses.php?action=delete&id=<?php echo $u['id']; ?>"onclick="return confirm ('yakin ?')" style= "text-decoration:none; color:red" >Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>