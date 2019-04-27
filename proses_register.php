<?php

include '../connect.php';

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$MNum = $_POST['MNum'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$male = $_POST['jenis_kelamin'];


$query = "INSERT INTO pesan
          VALUES ('$Fname', '$Lname', '$MNum','$email','$pass','$male')";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    echo "Berhasil tambah data <br>";
    //include 'indx.php';
}
else
{
     echo "Gagal tambah data <br>";
     //include 'form-create.php';
}



?>