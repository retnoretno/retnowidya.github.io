<?php
$koneksi=mysqli_connect('localhost','root','','retnowdy');
$Nis=$_POST['Nis'];
$nama_dpn=$_POST['nama_dpn'];
$nama_blk=$_POST['nama_blk'];
$tpt_lahir=$_POST['tpt_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$kelamin=$_POST['kelamin'];
$hobby=implode(",", $_POST['hobby']);
$alamat=$_POST['alamat'];

$queri=mysqli_query($koneksi,"INSERT INTO daftar (Nis,nama_dpn,nama_blk,tpt_lahir,tgl_lahir,kelamin,hobby,alamat)
VALUES('$Nis','$nama_dpn','$nama_blk','$tpt_lahir','$tgl_lahir','$kelamin','$hobby','$alamat')");

if($queri) {
	echo '<script>alert("Data berhasil disimpan. Terimakasih.")</script>';
	exit;
} else {
	echo '<script>alert("Data GAGAL disimpan")</script>';
	exit;
}

?>