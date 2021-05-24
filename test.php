<?php session_start();

if(isset($_POST)){
$currentCount=$_POST['currentCount'];


$_SESSION['Cauldron']=$currentCount;
print_r($_SESSION);
}
?>