<?php session_start();
//session_destroy();
    $qty=1;
    $add=1;
    if(isset($_POST)){
        $currentCount =0;
        if (!empty($_SESSION['currentCount'])){
        
            $currentCount=$_SESSION['currentCount'];
        }
        $product=$_POST['product'];
        $unitPrice=$_POST['unitPrice'];
        if (empty($_POST['qty'])){
            $add=1;
        }
        else{
            $add=(int)$_POST['qty'];
        }


        if(!empty($_SESSION['Cauldron']) && array_key_exists($product,$_SESSION['Cauldron'])){
            $qty= $_SESSION['Cauldron'][$product][0]+$add;
            
        }
        else {
            $qty=$add;
            $currentCount+=1;
        }


        if ($qty == 1){
            $_SESSION['disable']="disabled";
        }
        else
            $_SESSION['disable']="";

        $_SESSION['currentCount']=$currentCount;
        $_SESSION['Cauldron'][$product]=[$qty,$unitPrice,(float)$qty*$unitPrice];
        print_r($_SESSION);

    }
?>