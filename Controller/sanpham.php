<?php
$act="sanpham";
if (isset($_GET['act'])) {
    # code...
    $act=$_GET['act'];//sanphamkhuyenmai
}
switch ($act) {
    case 'sanpham':
        include_once "./View/sanpham.php";

        break;
    
    case 'sanphamkhuyenmai':
       
        include_once "./View/sanpham.php";

        break;
        

        case 'senda':
       
        include_once "./View/sanpham.php";

        break;

        case 'caycanh':
       
        include_once "./View/sanpham.php";

        break;
        case 'xuongrong':
       
        include_once "./View/sanpham.php";

        break;
        case 'thuysinh':
       
            include_once "./View/sanpham.php";
    
            break;
       
            
                
        
        case 'sanphamchitiet':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                   
                       $hh = new hanghoa();
                       $result = $hh->updateslx($id);
            }
        include_once "./View/sanphamchitiet.php";
        break;
        case 'timkiem':
            include_once "./View/sanpham.php";
            break;
}
?>