<!DOCTYPE html>
<html>

<head>
    <?php include "php/Controllers/_dependencies.php"?>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse pl-xl-5" id="navbarTogglerDemo02">
                <hr class="d-lg-none">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0 pl-xl-5">
                    <li class="nav-item active mx-xl-5 mx-lg-3 ">
                        <a class="nav-link" href="#">
                            <img src="img/khomsa.png" width="32">
                            Artefacts<span class="sr-only">(current)
                            </span>
                        </a>
                        <hr class="d-lg-none">
                    </li>
                    <li class="nav-item mx-xl-5 mx-lg-3">
                        <a class="nav-link" href="cauldron.php">
                            <input id="prodCountStore" type="hidden" value=0>
                            <img id="cauldronImg" src="img/cauldron_empty.png" width="32">
                            Cauldron <span class="d-none" id="prodCountDisplay"></span>
                        </a>
                        <hr class="d-lg-none">
                    </li>
                    <li class="nav-item mx-xl-5 mx-lg-3">
                        <a class="nav-link" href="contact.php">
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

    <!------------------------------------------------------------------------------->
    <!-----------------------------CategorySelector---------------------------------->
    <!------------------------------------------------------------------------------->
    <section class="container my-4">
        <h1 class="text-center memp">Artefacts</h1>
        <div class="container dp1 mt-4 rounded p-2 pt-lg-2 pb-lg-3 px-lg-4">
            <p class="text-center memp">Chose your desired category</p>
            <div class=" row">
                <div class="col-12 col-lg-3 my-2 m-sm-0">
                    <button class=" w-100  tablink btn btn-outline-prime"
                        onclick="openTab(event,'Amulets')">Crystals, Amulets...</button>
                </div>
                <div class="col-12 col-lg-3 my-2 m-sm-0">
                    <button class=" w-100  tablink btn btn-outline-prime"
                        onclick="openTab(event,'Grimoires')">Grimoires, Boards...</button>
                </div>
                <div class="col-12 col-lg-3 my-2 m-sm-0">
                    <button class=" w-100  tablink btn btn-outline-prime" onclick="openTab(event,'Potions')">Potions and
                        ingredients</button>
                </div>
                <div class="col-12 col-lg-3 my-2 m-sm-0">
                    <button class=" w-100  tablink btn btn-outline-prime" onclick="openTab(event,'Wands')">Wands,
                        Brooms...</button>
                </div>
            </div>
        </div>

    </section>

    <!------------------------------------------------------------------------------->
    <!-------------------------------ProductsDisplay--------------------------------->
    <!------------------------------------------------------------------------------->


    <!----------------------------------Amulets-------------------------------------->
    <section class="container categ mb-4" id="Amulets">
        <div class="dp1  mx-auto rounded p-2 p-lg-4">
            <h2>Crystals, Amulets and Enchanted tools</h2>
            <div id="card_container" class="row">
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_amuletCard1.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_amuletCard2.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_amuletCard3.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_amuletCard4.php"?>
                </div>
            </div>
        </div>
    </section>



<!---------------------------------Grimoires----------------------------------------->
    <section class="container categ mb-4" id="Grimoires">
        <div class="dp1 mx-auto  rounded p-2 p-lg-4">
            <h2>Grimoires, Boards and Cards</h2>
            <div id="card_container" class="row">
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_grimoireCard1.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_grimoireCard2.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_grimoireCard3.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_grimoireCard4.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_grimoireCard5.php"?>
                </div>
            </div>
        </div>
    </section>



<!-----------------------------------Potions------------------------------------>
    <section class="container  categ mb-4" id="Potions">
        <div class="dp1  mx-auto  rounded p-2 p-lg-4">
            <h2>Potions and Ingredients</h2>
            <div id="card_container" class="row">
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_potionsCard1.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_potionsCard2.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_potionsCard3.php"?>
                </div>
            </div>
        </div>
    </section>


<!-------------------------------------------Wands------------------------------------>
    <section class="container  categ mb-4 " id="Wands">
        <div class="dp1  mx-auto  rounded p-2 p-lg-4">
            <h2>Wands, Brooms and other Oddities</h2>
            <div id="card_container" class="row">
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_wandsCard1.php"?>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <?php include "php/Components/Product Cards/_wandsCard2.php"?>
                </div>
                
            </div>
        </div>
    </section>




    <!------------------------------------------------------------------------------->
    <!-----------------------------------Footer-------------------------------------->
    <!------------------------------------------------------------------------------->
    <?php include "php/Components/_footer.php"?>



    <!------------------------------------------------------------------------------->
    <!-----------------------------------Scripts------------------------------------->
    <!------------------------------------------------------------------------------->
    <script src="js/cartManager.js"></script>
    <script src="js/headerScroll.js"></script>
    <script src="js/tabs.js"></script>
</body>

</html>