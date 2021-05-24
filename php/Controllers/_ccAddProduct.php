<?php session_start();
//session_destroy();

if(isset($_POST)){
    $currentCount =1;
if (!empty($_SESSION['currentCount'])){
  
    $currentCount=$_SESSION['currentCount'];
}
$product=$_POST['product'];
$unitPrice=$_POST['unitPrice'];
$qty=1;
if(!empty($_SESSION['Cauldron'])){
    if(array_key_exists($product,$_SESSION['Cauldron'])){
        $qty= $_SESSION['Cauldron'][$product][0]+1;
        
    }
    else {
        $currentCount+=1;
    }

}

$_SESSION['currentCount']=$currentCount;
$_SESSION['Cauldron'][$product]=[$qty,$unitPrice];
print_r($_SESSION);

}
