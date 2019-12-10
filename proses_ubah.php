<?php

include "koneksi.php";


$nim		= $_POST[nim_mahasiswa];
$nama		= $_POST[nama_mahasiswa];
$semester	= $_POST[semester];
$jurusan	= $_POST[jurusan];
$alamat		= $_POST[alamat];
$phone		= $_POST[no_hp];
$email		= $_POST[email];
$jk			= $_POST[jk];
$status		= $_POST[status_mahasiswa];

$simpan = "UPDATE tb_mhs SET nim_mahasiswa='".$nim."', nama_mahasiswa='".$nama."', semester='".$semester."', jurusan='".$jurusan."', alamat='".$alamat."', no_hp=".$no_hp.", email='".$email."', jenis_kelamin='".$jk."', status_mahasiswa='".$status."', WHERE nim_mahasiswa=".$nim; 
	
if ($upload) {
	mysqli_query($conn,$simpan)
	echo "<script language='JavaScript'>
	alert('Data berhasil di Ubah!');
	document.location = 'data_mahasiswa.php'
	</script>";
	
} else {
	echo "Lapor!! Data error".mysqli_error($conn);
		# code...
}

// var_dump($ POST);
?>