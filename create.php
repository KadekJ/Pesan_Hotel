<?php

include '../connect.php';

$kode = $_POST['kode'];
$Cin = $_POST['Cin'];
$Cout = $_POST['Cout'];
$harga = $_POST['harga'];
$adult = $_POST['adult'];
$child = $_POST['child'];

$query = "INSERT INTO pesan
          VALUES ('$kode', '$Cin', '$Cout', '$harga', '$adult','$child')";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    //echo "Berhasil tambah data <br>";
    include 'read.php';
}
else
{
     // echo "Gagal tambah data <br>";
    include 'form-create.php';
}



?>