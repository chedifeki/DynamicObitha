<?php session_start();?>
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

    <?php include "php/Components/_header.php"?>


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
    <script src="js/headerManager.js"></script>
</body>

</html>