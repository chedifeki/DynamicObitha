<!DOCTYPE html>
<html>

<head>
    <?php include "php/Controllers/_dependencies.php"?>
    
    <script>
            $(window).on('load',function(){
                $("#OnLoadModal").modal('show');
            });
        </script>
</head>

<body class="dp0">
    <!------------------------------------------------------------------------------->
    <!---------------------------------Modal----------------------------------------->
    <!------------------------------------------------------------------------------->
    
    <?php include "php/Components/_welcomeModal.php"?>


    <!------------------------------------------------------------------------------->
    <!--------------------------------Header----------------------------------------->
    <!------------------------------------------------------------------------------->

    <header class="">
        <div id="logo" class="container-fluid">
            <a href="index.html">
                <img src="img/fullLogo.png" alt="logo of Obitha's Shop" id="logoimg" class="row mx-auto img-fluid">
            </a>
        </div>
        <div id="calibrator" class="d-none" style=" height:64px;"></div>
        <nav class="navbar navbar-expand-lg navbar-dark dp6">
            <a class="navbar-brand invisible" href="#">
                <h2 id="obitha">Obitha's Shop</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
    <!-----------------------------Caroussel----------------------------------------->
    <!------------------------------------------------------------------------------->
    <?php include "php/Components/_indexCarousel.php"?>
    <br>
    <br>
    <br>



    <!------------------------------------------------------------------------------->
    <!-------------------------------Section----------------------------------------->
    <!------------------------------------------------------------------------------->
    <section class="container">
        <div class="dp1 rounded mb-4 p-2 p-lg-4">
            <h2 class="mb-4">Who are We</h2>
            <div class="">
                <div class="iframe-container ml-lg-4 my-4 mb-lg-0 mt-lg-2 embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315"
                        src="https://www.youtube.com/embed/sYrm9YZBeqs" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <p class="hemp text-justify">
                    After a long career in Kidnapping Children, human and organs trafficking and other horrors,<b> Madam
                        Obitha</b> decided it was time for a change of Pace.
                </p>
                <p class="hemp text-justify">
                    With the assistance of her large network of tortured souls and repungent creatures, she put op
                    together a successful international commerce providing the finest tools <u>every sorcerer and witch
                        needs</u>.</p>
                <p class="hemp text-justify">
                    Starting as a specialized local vendor of human based delicacies, the commerce soon grew to englobe
                    <b>talismans</b>, <b>potions</b>, and <b>magical artefacts</b> from all around this globe... and
                    beyond!
                </p>
                <br>
                <br>
                <h2 class="mb-4">Our Mission.</h2>
                <p class="hemp text-justify">
                <span class="navbar-brand">Obitha's Shop™</span> is slowly becoming the <b>Amazon</b> of the Magical world with its
                dedication to bringing
                the <b><u>finest ingredients</u></b>, the <b><u>rarest Grimoires</u></b> and <b><u>Olivander's best wands</u></b> to its Clients.
                </p>
                <p class="hemp text-justify">
                    We believe that a happy witch is a <b>Powerful Witch</b>, and after centuries of being <u>mistreated</u> and
                    having a hard time gathering the knowledge and tools, sometimes at the detriment of our lives, We
                    aim at providing these tools with a never-before witnessed ease, and to a bigger audience as well!
                </p>
                <p class="hemp text-justify">
                    We will be enlarging our catalogue as the time goes by to satisfy the needs of all forsaken
                    creatures. <b>Trolls</b>, <b>Ghouls</b>, and even <b>Bou-Saadia</b>! Brace yourselves for the winter is coming and soon you
                    will have all your necessties to wreck havok in the human world! 
                </p>
                <p class="hemp text-justify">
                    If you would like to recieve update about our most recent additions, concoctions and additions as
                    well as a selection of our most popular products directly to your pigeon nest, or you mailbox for the
                    modern witches and wizards outthere, you can <b>subscribe to our news-Letter</b> via the form below:
                </p>
                <div class=" my-4">
                    <form class="form-inline w-100">
                        <fieldset class="dp4 w-100 text-center p-4 rounded">
                            <legend class="d-md-none">Subscribe</legend>
                            <legend class="d-none d-md-block">Subscribe to our news-Letter</legend>
                           
                                
                                <input class="form-control mr-2 " type="email" placeholder="cast your Adress here">
                            <button class="btn btn-outline-prime my-2 my-sm-0" type="submit">Cast</button>

                            
                            
                            <p class="disabled">
                                *due to GRDP restrictions we are currently unable to serve our dear clients in europe,
                                we will fix
                                this as fast as possible. <br>We thank you for you understanding!
                            </p>
                        </fieldset>
                    </form>
                </div>
                <p class="text-center hemp">
                    From <b>Madam Obitha</b>,<br>
                    And her Associates<br>
                    Stay Bewitched!<br>
                    <b>Excelsior!</b>
                </p>

                </p>
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
    <script src="js/headerScroll.js"></script>
</body>

</html>