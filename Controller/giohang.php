<?php
// session_unset();
    if(!isset($_SESSION['cart']))
    {
        $_SESSION['cart']=array();
    }
    $act='giohang';
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'giohang':
            include_once "./View/cart.php";
            break;
        case 'giohang_action':
            $id=0;
            
            $soluong=0;
            if(isset($_POST['mahh'])){
                $id=$_POST['mahh'];
                
                $soluong=$_POST['soluong'];
                $gh=new giohang();
                $gh->addCart($id, $soluong);
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
            }



        break;
    }
?>