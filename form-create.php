<?php

include '../connect.php';

$query = "SELECT kode FROM pesan";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/form-create.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Sumana" 
    rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesan Hotel</title>
    </head>
    <body>
        <header id="header">
            <div class="container">
            <h1 class="header-logo">Roof</h1>
                <nav class="nav-bar">
                    <ul class="nav-items">
                        <li><a href="../hotel/index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="../register/register.php">Register</a></li>
                        <li><a href="../login/login.php">Login</a></li>
                    </ul>
                </nav>
            </div>  
        </header>
        <div class="fcreate">
            <img src="../img/cer2.jpg" style="height:750px;width:1349px;">
            <div class="name">
               
                <center><h2> Tambah Data Pengunjung</h2></center>
               
        </div>
        
        <form action="create.php" method="POST">
        <div class="form-create">
        <table>
            <tr>
                <td><label for="kode">Kode Kamar</label></td> <td> : </td>
                <td><input type="text" name="kode" id="name"></td>
            </tr>
            <tr>
                <td><label for="Cin">Check in</label></td> <td> : </td>
                <td><input type="date" name="Cin" class="date" id="num"></td>
            </tr>
            <tr>
                <td><label for="Cout">Check out</label></td> <td> : </td>
                <td><input type="date" name="Cout" class="date" id="num"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga</label></td> <td> : </td>
                <td><input type="text" name="harga" id="name"></td>
            </tr>
           <tr>
                <td><label for="adult">Adults</label></td> <td> : </td>
                <td><input type="text" name="adult" id="name" ></td>
            </tr>
            <tr>
                <td><label for="child">Children</label></td> <td> : </td>
                <td><input type="text" name="child" id="name" ></td>
            </tr>
            <tr>
            <td></td> <td></td> <td><input type="submit" name="Simpan" value="Simpan" id="sub"></td>
            </tr>
            <!--<h2> Tambah Data Hotel</h2>
    <div class="radio-btn">
                <input type="radio" class="btn" name="check" checked="checked">
                <span>Roundtrip</span>
                <input type="radio" class="btn" name="check"><span>One Way</span>
                <input type="radio" class="btn" name="check"><span>Multy-City</span>
    </div>-->
           <!-- <div class="booking-form">
                <label>Flying From</label>
                    <input type="text" class="form-control" >
                <label>Flying To</label>
                    <input type="text" class="form-control" >

                <div class="input-grp">
                <label>Departing</label>
                    <input type="date" class="form-control select-date">
                </div>

                <div class="input-grp">
                <label>Returing</label>
                    <input type="date" class="form-control select-date">
                </div>

                <div class="input-grp">
                <label>Adults</label>
                    <input type="number" class="form-control" value="1">
                </div>

                <div class="input-grp">
                <label>Children</label>
                    <input type="number" class="form-control" value="0">
                </div>-->

            </table>
            </div>
        </form>
    </body>
</html>
 <!--<td><label for="dosen_pengajar">Dosen Pengajar</label></td> <td> : </td> di line 74
            <td><select name="id_dosen" id="nama_dosen">
                <option value="NULL">--Pilih salah satu--</option>-->
                <?php
                    /*hile ($data = mysqli_fetch_assoc($result)) {
                        ?>
                    <option value="<?php echo $data['id_dosen']; ?>">
                        <?php echo $data['nama_dosen']; ?>
                    </option>
                    <?php
                    }
                
                    ?>
            </td>
            </select>*/