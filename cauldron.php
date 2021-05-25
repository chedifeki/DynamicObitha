<?php session_start(); //session_destroy();?>
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
                    <li class="nav-item  active mx-xl-5 mx-lg-3" id="cauldronNavContainer">
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
    <!------------------------------ProductSelector---------------------------------->
    <!------------------------------------------------------------------------------->
    <section class="container my-4">
        <h1 class="text-center memp">Cauldron</h1>
        <div class="container dp1 mt-4 rounded p-2 pt-lg-2 pb-lg-3 px-lg-4">
            <p class="text-center memp">Select Product, Price and quantity</p>
            <div class="form my-2 p-2 my-lg-0 text-center">
                <div class=" form-row">
                    <div class="col-12 col-lg-6 my-2 ">
                        <select class="form-control w-100 " id="prodSelector">
                            <option selected><b>Select a Product</b></option>
                            <optgroup label="Amulets">
                                <option value="15.0">Al-Fadhir O'din</option>
                                <option value="" disabled>Khomsa</option>
                                <option value="" disabled>Oeil</option>
                            </optgroup>
                            <optgroup label="Crystals">
                                <option value="156.0">Citrine</option>
                                <option value="69.0">Quartzium</option>
                            </optgroup>
                            <optgroup label="Potions">
                                <option value="69.0">Health Potion</option>
                                <option value="222.0">Boiling Water</option>
                                <option value="420.0">Felix Felicis</option>
                            </optgroup>


                        </select>
                    </div>

                    <div class="col-12 col-lg-3 my-2 ">
                        <input class="form-control " type="number" placeholder="Quantity" id="qtyInput">
                    </div>
                    <div class="col-12 col-lg-3 my-2 ">
                        <button class=" btn btn-outline-prime my-2 my-sm-0" id="insertProduct_btn" disabled>Add to the Cauldron</button>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!------------------------------------------------------------------------------->
    <!-------------------------------CauldronDisplay--------------------------------->
    <!------------------------------------------------------------------------------->
    <section class="container mb-4">
        <div class="dp1 rounded p-2 p-lg-4" id="tableContainer">
            <table class="table table-bordered table-hover table-dark p-0 m-0" id="cauldronTable">
                <thead>
                    <tr>
                        
                        <th>
                            <span class="d-none d-lg-block">Product</span>
                            <span class="d-lg-none">Prod.</span>
                        </th>
                        <th>
                            <span class="d-none d-lg-block">Quantity</span>
                            <span class="d-lg-none">Qty.</span>
                        </th>
                        <th>
                            <span class="d-none d-lg-block">Unit Price</span>
                            <span class="d-lg-none">Price</span>
                        </th>
                        <th>
                            <span class="d-none d-lg-block">Subtotal</span>
                            <span class="d-lg-none">SubT.</span>
                        </th>
                        <th><span class="d-lg-none">Del.</span></th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                        if(!empty($_SESSION['Cauldron'])){
                            foreach ($_SESSION['Cauldron'] as $product => $tab) {
                                echo "
                                    <tr>
                                        
                                        <td>" . $product . "</td>
                                        <td id='qtytd'><div class='w-100 my-auto d-inline-flex justify-content-around'><button class='col-3 my-2 btn btn-outline-prime QtyModifier'onclick='updateQty(this)' ".$_SESSION['disable'].">-</button><input class=' my-2 col-5 form-control' type=number value=".$tab[0]." readonly><button class=' my-2 col-3 btn btn-outline-prime' onclick='updateQty(this)'>+</button></div></td>
                                        <td>" . $tab[1] . "</td>
                                        <td>" . $tab[2] . "</td>
                                        <td><button class='invisible-btn deleteProduct_btn' onclick='deleteProduct(this)'><i class='far fa-trash-alt'></i></button></td>
                            
                                    </tr> 
                                    ";
                            }
                        }
                        ?>
                </tbody>
                <tfoot>
                    <tr id="totalrow">
                        <th colspan="3" class="text-right text-uppercase">
                            Total
                        </th>
                        <td id="totalcol">
                        <!-- legacy stuuf 
                            <input id="totalStore" type="hidden" value="0">
                            <div class="d-none" id="totalDisplay"> </div>-->
                            <?php
                                if(!empty($_SESSION['Cauldron'])){
                                    $total=0;
                                    foreach ($_SESSION['Cauldron'] as $product => $tab) {
                                        $total+=$tab[2];
                                    }
                                    echo $total." TND";
                                }
                            ?>
                        </td>
                        <td class="d-none d-lg-block"><button class="checkout_btn btn btn-outline-prime d-none d-lg-block w-100 " id="checkout_btn1" onclick='checkout()'>Checkout</button></td>
                    </tr>
                </tfoot>
            </table>
            <p class="text-right disabled m-0 p-0">* 21% VAT included</p>
            <button class=" checkout_btn btn btn-outline-prime w-100  d-lg-none" id="checkout_btn2" onclick='checkout()'>Checkout</button>
        </div>
    </section>


    <!-----------------------------------Thank You Modal----------------------------->
    <?php include "php/Components/_ThankYouModal.php" ?>
    <!------------------------------------------------------------------------------->
    <!-----------------------------------Footer-------------------------------------->
    <!------------------------------------------------------------------------------->
    <?php include "php/Components/_footer.php" ?>


    <!------------------------------------------------------------------------------->
    <!-----------------------------------Scripts------------------------------------->
    <!------------------------------------------------------------------------------->
    <script src="js/cartManagerv2.js"></script>
    <script src="js/headerManager.js"></script>
</body>

</html>