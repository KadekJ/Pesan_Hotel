<?php

include '../connect.php';
//session_start();

/*if(!(isset($_SESSION['user'])))
{
    header("location: ../login/form-login.php");
}*/



$query = "SELECT * FROM pesan";
$result = mysqli_query($connect,$query);
$num = mysqli_fetch_array($result);

?>

<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="../css/read.css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Sumana" 
        rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Booking Hotel</title>
    </head>
    <body>
        <header id="header">
            <div class="container">
            <h1 class="header-logo">Roof</h1>
                <nav class="nav-bar">
                    <ul class="nav-items">
                        <li><a href="read.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </nav>
            </div>  
        </header>
           <!-- <div id="slider">
                <figure>
                    <img src="img/new5.jpg">
                    <img src="img/new2.jpg">
                    <img src="img/new3.jpg">
                    <img src="img/new4.jpg">
                    <img src="img/new5.jpg">
                    
                </figure>-->
            </div>
        <!--<form action="search.php" method="get">
            <input type="search" name="cari" placeholder="Masukkan pencarian...">
            <input type="submit" value="Cari">
        </form>-->

    <div class="read-b">
    <img src="../img/reg1.jpg" style="height:750px;width:1349px;">
    
        <div class="name">
            <h2>Data Pemesanan</h2>
        </div>
        <div class="name1">
            <a href="form-create.php">
                <h4>Tambah Data</h4>
                </a>

        </div>
        <div class="read-res">
        <table border = '1' style :"background-color: white" >
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Tanggal Checkin</th>
        <th>Tanggal Checkout</th>
        <th>Harga</th>
        <th>Adult</th>
        <th>Children</th>
        
    </tr>
    
    
    <?php
    /*$no=0;
    $tampil = mysqli_query($connect,"SELECT * FROM pesan");
    $ambil = mysqli_fetch_array($tampil);
    foreach ($ambil as $data) {*/
    ?>
    
    <?php 
    //} 
    ?>
     <?php 
        if($num > 0){
            $no = 1;
            while($data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $no ."</td>";
                echo "<td>". $data['kode'] . "</td>";
                echo "<td>". $data['tgl_checkin'] . "</td>";
                echo "<td>". $data['tgl_checkout'] . "</td>";
                echo "<td>". $data['harga'] . "</td>";
                echo "<td>". $data['adult'] . "</td>";
                echo "<td>". $data['child'] . "</td>";
                echo "<td><a href = 'form-update.php?kode=" . $data['kode'] . "'>Edit<?a> | "; 
                echo "<td><a href='delete.php?kode=" . $data['kode'] . "'onclick='etuen confirm(\"Apakah anda yakin untuk menghapus data?\")'>Hapus</a></td>";
                echo "</tr>";
                $no++;
            }
        }else{
            echo "<td colspan = '3'>Tidak ada data</td>";
        }
    ?>

    </div>
    </table>
    </div>
    
    </body>
</html>