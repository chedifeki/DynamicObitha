<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include "php/Controllers/_dependencies.php" ?>
</head>

<body class="dp0">
    <!------------------------------------------------------------------------------->
    <!--------------------------------Header----------------------------------------->
    <!------------------------------------------------------------------------------->

    <header class="">
        <div id="logo" class="container-fluid">
            <a href="index.php">
                <img src="img/fullLogo.png" alt="logo of Obitha's Shop" id="logoimg" class="row mx-auto img-fluid">
            </a>
        </div>
        <div id="calibrator" class="d-none" style=" height:64px;"></div>
        <nav class="navbar navbar-expand-lg navbar-dark dp6">
            <a class="navbar-brand invisible" href="index.php">
                <h2 id="obitha">Obitha's Shop</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse pl-xl-5" id="navbarTogglerDemo02">
                <hr class="d-lg-none">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0 pl-xl-5">
                    <li class="nav-item  mx-xl-5 mx-lg-3 ">
                        <a class="nav-link" href="artefacts.php">
                            <img src="img/khomsa.png" width="32">
                            Artefacts
                        </a>
                        <hr class="d-lg-none">
                    </li>
                    <li class="nav-item mx-xl-5 mx-lg-3" id="cauldronNavContainer">
                        <a class="nav-link" href="cauldron.php" id="cauldronNav">

                            <?php
                            if (empty($_SESSION['currentCount']) || (int)$_SESSION['currentCount'] == 0) {
                                echo "
                                    <input id='prodCountStore' type='hidden' value=0>
                                    <img id='cauldronImg' src='img/cauldron_empty.png' width='32'>
                                    Cauldron <span class='d-none' id='prodCountDisplay'></span>";
                            } else {
                                echo "  
                                    <input id='prodCountStore' type='hidden' value=" . $_SESSION['currentCount'] . ">
                                    <img id='cauldronImg' src='img/cauldron_full.png' width='32'>
                                    Cauldron <span class='' id='prodCountDisplay'>" . $_SESSION['currentCount'] . "</span> ";
                            }
                            ?>


                        </a>
                        <hr class="d-lg-none">
                    </li>
                    <li class="nav-item active mx-xl-5 mx-lg-3">
                        <a class="nav-link" href="#">
                            <img src="img/parchment.png" width="32">
                            Summon Us
                        </a>
                        <hr class="d-lg-none">
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-2 w-50" type="search" placeholder="Cast a Spell">
                    <button class="btn btn-outline-prime my-2 my-sm-0" type="submit">Cast</button>
                </form>
            </div>
        </nav>
    </header>


    

    <br>
    <br>
    <br>



    <!------------------------------------------------------------------------------->
    <!---------------------------------Contact From---------------------------------->
    <!------------------------------------------------------------------------------->
    <section class="container">
        <h1 class="text-center memp">Summon Us!</h1>
        <div class="dp1 rounded my-4 p-2 p-lg-4 container">
            <div class="row text-right w-100">
                
               
                    <ul class = "list-unstyled w-100">
                        <li class=" mx-4 list-item disabled">
                        
                            74 666 666 &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-phone"></i>
                        </li>
                        <li class=" mx-4 list-item disabled">
                            
                            contact@obithacommerce.com &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-at"></i>
                        </li>
                        <li class="mx-4 list-item disabled">
                        
                            Afrane Road km6.9, Sfax, Tunisia &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-map-marked-alt"></i>
                        </li>

                    </ul>
                
            </div>
            <div class="row text-center">
                <div class="col-12  col-md-offset-2">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="exampleInputName2" class="memp">Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2" class="memp">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputText" class="memp">Your Message</label>
                            <textarea class="form-control" placeholder="Description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-prime">Send Message</button>
                    </form>

                    <hr>
                    <h3 class="memp">Our Social Sites</h3>
                </div>
                <ul class="list-inline banner-social-buttons  text-center mx-auto col-12">
                    <li class="list-inline-item m-2"><a href="#" class="btn btn-outline-prime "><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li class="list-inline-item mx-2"><a href="#" class="btn btn-outline-prime "><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li class="list-inline-item mx-2"><a href="#" class="btn btn-outline-prime "><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
                </ul>
            </div>
        </div>


    </section>



    <!------------------------------------------------------------------------------->
    <!-----------------------------------Footer-------------------------------------->
    <!------------------------------------------------------------------------------->
    <?php include "php/Components/_footer.php" ?>





    <!------------------------------------------------------------------------------->
    <!-----------------------------------Scripts------------------------------------->
    <!------------------------------------------------------------------------------->
    <script src="js/headerManager.js"></script>

    
</body>

</html> 