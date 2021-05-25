<?php session_start();
//session_destroy();

if(isset($_POST)){
    $indx= $_POST['indx'];

    if (empty($_SESSION['Cauldron'])){

    }
    else{
        if(array_key_exists($indx,$_SESSION['Cauldron'])){
            unset($_SESSION['Cauldron'][$indx]);
            $_SESSION['currentCount']-=1;
        }
    }



    print_r($_SESSION);
}
?>