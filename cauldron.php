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
                    <li class="nav-item  active mx-xl-5 mx-lg-3">
                        <a class="nav-link" href="#">
                            <input id="prodCountStore" type="hidden" value="0">
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
    <!------------------------------ProductSelector---------------------------------->
    <!------------------------------------------------------------------------------->
    <section class="container my-4">
        <h1 class="text-center memp">Cauldron</h1>
        <div class="container dp1 mt-4 rounded p-2 pt-lg-2 pb-lg-3 px-lg-4">
            <p class="text-center memp">Select Product, Price and quantity</p>
            <div class="form my-2 p-2 my-lg-0 text-center">
                <div class=" form-row">
                    <div class="col-12 col-lg-3 my-2 ">
                        <select class="form-control w-100 " id="prodSelector">
                            <option selected><b>Select a Product</b></option>
                            <optgroup label="Amulets">
                                <option value="Al-fadhir O'din">Al-fadhir O'din</option>
                                <option value="Khomsa" disabled>Khomsa</option>
                                <option value="Oeil" disabled>Oeil</option>
                            </optgroup>
                            <optgroup label="Crystals">
                                <option value="Citrine">Citrine</option>
                                <option value="Quartzium">Quartzium</option>
                            </optgroup>
                            <optgroup label="Potions">
                                <option value="Health Potion">Health Potion</option>
                                <option value="Boiling Water">Boiling Water</option>
                                <option value="Felix Felicis">Felix Felicis</option>
                            </optgroup>
                            <optgroup label="">

                            </optgroup>

                        </select>
                    </div>
                    <div class="col-12 col-lg-3 my-2 ">
                        <input class="form-control " type="number" placeholder="price" id="priceInput">
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
        <div class="dp1 rounded p-2 p-lg-4">
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

                </tbody>
                <tfoot>
                    <tr id="totalrow">
                        <th colspan="3" class="text-right text-uppercase">
                            Total
                        </th>
                        <td id="totalcol">
                            <input id="totalStore" type="hidden" value="0">
                            <div class="d-none" id="totalDisplay"> </div>
                        </td>
                        <td class="d-none d-lg-block"><button class="checkout_btn btn btn-outline-prime d-none d-lg-block w-100 " id="checkout_btn1">Checkout</button></td>
                    </tr>
                </tfoot>
            </table>
            <p class="text-right disabled m-0 p-0">* 21% VAT included</p>
            <button class=" checkout_btn btn btn-outline-prime w-100  d-lg-none" id="checkout_btn2">Checkout</button>
        </div>
    </section>



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