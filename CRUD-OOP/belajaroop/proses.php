<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama'],$_POST['tempat'],$_POST['tgllahir'],$_POST['wn'],$_POST['alamat'],$_POST['email'],$_POST['nohp'],$_POST['asal'],$_POST['ayah'],$_POST['ibu'],$_POST['penghasilan']);
	header('location:tampildata.php');
}elseif($action=="update")
{
	$koneksi->update_data($_POST['id'],$_POST['nama'],$_POST['tempat'],$_POST['tgllahir'],$_POST['wn'],$_POST['alamat'],$_POST['email'],$_POST['nohp'],$_POST['asal'],$_POST['ayah'],$_POST['ibu'],$_POST['penghasilan']);
	header('location:tampildata.php');
}elseif($action=="delete")
{
	$id_calon = $_GET['id'];
	$koneksi->delete_data($id_calon);
	header('location:tampildata.php');
}


?>