<?php

include "koneksi.php";

$nim		= $_POST['nim_mahasiswa'];
$nama		= $_POST['nama_mahasiswa'];
$semester	= $_POST['semester'];
$jurusan	= $_POST['jurusan'];
$alamat		= $_POST['alamat'];
$phone		= $_POST['no_hp'];
$email		= $_POST['email'];
$jk			= $_POST['jk'];
$status		= $_POST['status'];
// $namaFile = $_FILES['foto']['name'];
// $dirtmp = $_FILES['foto']['tmp_name'];
// $folder = "gambar/";

//$upload = move_uploaded_file($dirtmp, $folder, $namaFile);

// $tampil = $conn->query('SELECT * FROM tb_mhs')or die($mysqli->error);
// $arr = $tampil->fetch_array();
$simpan = "INSERT INTO tb_mhs (nim_mahasiswa,nama_mahasiswa,semester,jurusan,alamat,no_hp,email,jk,status_mahasiswa) VALUES ($nim,'"$nama"','"$semester"','"$jurusan"','"$alamat"',$phone, '"$email"','"$jk"','"$status"')";


var_dump($simpan);

if ($upload) {
	mysqli_query($conn,$simpan);
	echo "<script language='JavaScript'>
	alert('Data berhasil di Ubah!');
	document.location = 'data_mahasiswa.php'
	</script>";
} else {
	echo "Lapor!! Data error".mysqli_error($conn);
 }
 ?>