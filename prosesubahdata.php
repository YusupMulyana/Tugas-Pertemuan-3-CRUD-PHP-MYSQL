<?php
include_once("koneksi.php");
$id_pegawai= $_POST['id'];
$NAMA_PELANGGAN = $_POST['NAMA_PELANGGAN'];
$ALAMAT= $_POST['ALAMAT'];
$SEWA= $_POST['SEWA'];
$query="UPDATE id_pegawai SET
NAMA_PELANGGAN='$NAMA_PELANGGAN',ALAMAT='$ALAMAT',SEWA='$SEWA' WHERE id=$id_pegawai";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
	//echo $query;
header('location:index.php');
} else {
echo "Update data gagal";
}
?>