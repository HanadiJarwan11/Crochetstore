<?php
session_start();
//  session_destroy();
// print_r($_SESSION['myCart']);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['myCart']))
        {
            $myItems = array_column($_SESSION ['myCart'], 'Item_name');
            if (in_array($_POST['Item_name'], $myItems))
            {
                echo "<script> alert ('Item already added');
                window.location.href = 'index.php';</script>";
            } 
            else{
                    $count = count($_SESSION['myCart']);
                    $_SESSION['myCart'][$count] = array ('Item_name' => $_POST ['Item_name'],'Item_value' => $_POST['Item_value'], 'Quantity' =>1);
            // print_r($_SESSION['myCart']);
            echo "<script> alert ('Item added');
                window.location.href = 'index.php';</script>";
            }
        }

         else {
            $_SESSION['myCart'][0] = array ('Item_name' => $_POST ['Item_name'],'Item_value' => $_POST['Item_value'], 'Quantity' =>1);
            echo "<script> alert ('Item added');
                window.location.href = 'index.php';</script>";
        }
    
        }
    } 

    //REMOVING ITEM FROM CART

    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['myCart'] as $key => $value)
        {
            if($value['Item_name'] == $_POST['Item_name'])
            {
            unset($_SESSION['myCart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['myCart']);
            echo "<script> alert('Item Removed');
            window.location.href='myCart.php';
            </script>";                
            }
        }
    }


    



?> 