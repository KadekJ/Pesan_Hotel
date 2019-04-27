<?php

include '../connect.php';

$kode = $_GET['kode'];

$query = "DELETE FROM pesan WHERE kode = $kode";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

?>

<?php
if($num > 0){
    header("location: ../hotel/read.php");
}else{
    header("location: ../hotel/read.php");
}