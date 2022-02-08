<?php
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "calonsiswa";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tabelcalon");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

    function tambah_data($nama,$tempat,$tgllahir,$wn,$alamat,$email,$nohp,$asal,$ayah,$ibu,$penghasilan)
	{
		mysqli_query($this->koneksi,"insert into tabelcalon values ('','$nama','$tempat','$tgllahir','$wn','$alamat','$email','$nohp','$asal','$ayah','$ibu','$penghasilan')");
	}

    function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from tabelcalon where id='$id'");
		return $query->fetch_array();
	}

    function update_data($id,$nama,$tempat,$tgllahir,$wn,$alamat,$email,$nohp,$asal,$ayah,$ibu,$penghasilan)
	{
		$query = mysqli_query($this->koneksi,"update tabelcalon set nama='$nama',tempat='$tempat',tgllahir='$tgllahir',wn='$wn',alamat='$alamat',email='$email',nohp='$nohp',asal='$asal',ayah='$ayah',ibu='$ibu',penghasilan='$penghasilan' where id = '$id'" );
	}

    function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from tabelcalon where id='$id'");
	}

}
?>