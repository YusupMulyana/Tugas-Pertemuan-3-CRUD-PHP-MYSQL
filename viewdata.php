<?php
include_once ("koneksi.php");
$query= "SELECT * FROM id_pegawai";

$hasil = mysqli_query ($koneksi, $query);

while($data=mysqli_fetch_array ($hasil)) {
	echo $data ['NAMA_PELANGGAN']."<br/>";
}
?>