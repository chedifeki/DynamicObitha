<?php 
session_start();
//session_destroy();
if(!empty($_SESSION['Cauldron'])){
    unset($_SESSION['Cauldron']);
    unset($_SESSION['currentCount']);
}

?>