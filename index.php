<?php
include_once ("koneksi.php");
$query= "SELECT * FROM id_pegawai";
$hasil = mysqli_query ($koneksi, $query);
?>
<!DOCTYPE html>
 <html>
 <head>
 <title>DATA PELANGGAN HOTEL FOX LITE HARRIS</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=devicewidth, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/c
ss/bootstrap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263X
mFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
 <title>DATA PELANGGAN HOTEL</title>
 </head>
 <body>
 <div class="alert alert-success text-center" role="alert"
> <h2>DATA PELANGGAN HOTEL FOX</h2>
 </div>
<a href="tambahdata.php" class="btn btn-primary mb-1
mt-1"><i class="fas fa-user-plus mr-2"></i>Tambah
Data</a>
 <table class="table table-bordered">
 <thead class="thead-light">
 <tr>
 <th scope="col">NO_KTP</th>
 <th scope="col">NAMA_PELANGGAN</th>
 <th scope="col">ALAMAT</th>
 <th scope="col">SEWA</th>
 <th scope="col">Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php $nomor=1;
 while ($data=mysqli_fetch_array ($hasil)){ ?>
 <tr>
 <th scope="row"> <?php echo $nomor; ?></th>
 <td> <?php echo $data['NAMA_PELANGGAN']; ?> </td>
 <td> <?php echo $data['ALAMAT']; ?> </td>
 <td> <?php echo $data['SEWA']; ?> </td>
 <td> <a href="ubahdata.php?id=<?php echo
$data['id_pegawai'] ?>">Edit</a>
     |<a href="hapusdata.php?id=<?php echo
$data['id_pegawai'] ?>"> Delete</a></td>
</tr>
<?php $nomor++;} ?>
 </tbody>
</table>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJ
wFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>
 <script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.
9/umd/popper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUib
X39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/
bootstrap.min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1
MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
 </body>
 </html>