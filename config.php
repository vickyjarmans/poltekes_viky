<?php
$koneksi = mysqli_connect("localhost","root","","poltekes_viky");
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>