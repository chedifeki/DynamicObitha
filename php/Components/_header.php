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
                <li class="nav-item mx-xl-5 mx-lg-3">
                    <a class="nav-link" href="cauldron.php">
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