<?php
include_once ("koneksi.php");
$id=$_GET['id_pegawai'];
$query="delete from id_pegawai where id_pegawai=$id";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:index.php');
}else {
echo "Hapus Data Gagal";
}
?>