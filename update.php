<?php

include '../connect.php';

$kode = $_POST['kode'];
$Cin = $_POST['Cin'];
$Cout = $_POST['Cout'];
$harga = $_POST['harga'];
$adult = $_POST['adult'];
$child = $_POST['child'];

$query = "UPDATE pesan SET tgl_checkin = $Cin, tgl_checkout = $Cout, harga = $harga, adult = $adult, child = $child
          WHERE kode = $kode";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

?>

<?php
if($num > 0){
    //echo "Berhasil tambah data <br>";
    include 'read.php';
}else{
     // echo "Gagal tambah data <br>";
    include 'form-update.php';
}
echo "<a href='read.php'>Lihat Data</a>";
?>