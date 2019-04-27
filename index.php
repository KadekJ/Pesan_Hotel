<?php

include '../connect.php';
//session_start();

/*if(!(isset($_SESSION['user'])))
{
    header("location: ../login/form-login.php");
}*/



$query = "SELECT * FROM pesan";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
// echo $num;
?>

<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="../css/index.css">
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
                        <li><a href="../hotel/index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="../register/register.php">Register</a></li>
                        <li><a href="../login/login.php">Login</a></li>
                    </ul>
                </nav>
            </div>  
        </header>
            <div id="slider">
                <figure>
                    <img src="../img/new5.jpg">
                    <img src="../img/new2.jpg">
                    <img src="../img/new3.jpg">
                    <img src="../img/new4.jpg">
                    <img src="../img/new5.jpg"> 
                    
                </figure>
                <br><br>
            </div>
            
            <section class="sec1"></section>
            
            <section class="content">
                <section class="content">
                <h1>What Hotel Roof is that?</h1>
             <p>Hotel Roof was established at the beginning of the 21st century where 
                it was the time when hotel companies were skyrocketing.
                hotel roof has stood 35 years and is a mainstay of families within and outside the 
                country.we provide various facilities to suit your needs, and try your best in serving.
                Customer satisfaction is the main thing.having a strategic location makes the hotel has various
                advantages, close to the airport, train station, shopping center, close to the playground.</p>
                
            </section>
            <section class="sec2"></section>
            <h1>Hotel Facility</h1>
                <p>  • Located close to Jakarta International Airport
                     • Building with a shopping area
                     • Coffee shop
                     • 24 hours in-room dining
                     • Central business
                     • Fitness center
                     • Swimming pool
                     • Massage
                     • Free Wi-Fi internet access
                     • Laundry and dry cleaning services
                     • Shoe cleaning services
                     • Baby sitting
                     • Concierge desk
                     • Car rental
                     • Free daily newspaper
                     • Gift shop
                     • Currency exchange place
                     • Outdoor car parking
                     • 24-hour security and CCTV cameras
                     • Free Airport Shuttle 24 hours
                     
                </p>
            
            <!--<section class="sec4"></section>-->
    </body>
</html>