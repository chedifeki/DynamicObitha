<?php
    session_start();

    if(isset($_POST)){
        $op = $_POST['op'];
        $product=$_POST['product'];
    
        if(array_key_exists($product, $_SESSION['Cauldron'])){
            
            if ($op == '+'){
                $_SESSION['disable']="";
                $_SESSION['Cauldron'][$product][0] += 1;
                $_SESSION['Cauldron'][$product][2] += (float)$_SESSION['Cauldron'][$product][1];
             
            }
        
            else if($op == '-'){
                
                if (((int)$_SESSION['Cauldron'][$product][0]-1) == 1){

                    $_SESSION['disable']="disabled";
                }
                    $_SESSION['Cauldron'][$product][0] -= 1;
                    $_SESSION['Cauldron'][$product][2] -= (float)$_SESSION['Cauldron'][$product][1];
                
            }
                
        }
        else 
            echo " can't find product";

    }



    print_r($_SESSION);
