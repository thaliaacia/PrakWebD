<?php
$conn = mysqli_connect("localhost","root","","db_pendaftaran");

if (mysqli_connect_error()) {
	echo "koneksi gagal : " . mysqli_connect_error($conn);

}
?>
