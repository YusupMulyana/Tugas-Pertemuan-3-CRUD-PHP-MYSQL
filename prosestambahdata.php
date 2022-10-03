<?php
include_once("koneksi.php");
$NAMA_PELANGGAN = $_POST['NAMA_PELANGGAN'];
$ALAMAT = $_POST['ALAMAT'];
$SEWA = $_POST['SEWA'];
$query="INSERT INTO id_pegawai (NAMA_PELANGGAN, ALAMAT, SEWA) VALUE ('$NAMA_PELANGGAN','$ALAMAT','$SEWA')";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:index.php');
} else {
	echo $query . "<br>";
	echo "input data gagal";
}
?>