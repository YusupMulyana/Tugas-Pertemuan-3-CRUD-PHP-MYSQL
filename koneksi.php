<?php
$host="localhost";
$user="root";
$password="";
$database="dbpelayananhotel";

$koneksi=mysqli_connect($host,$user,$password);
mysqli_select_db($koneksi,$database);

//cek koneksi
if($koneksi){
"Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>