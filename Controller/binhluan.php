<?php 


         

if (isset($_SESSION['makh'])) {
    $makh = $_SESSION['makh'];
    $mahh = $_POST['mahh'];
    $commen = $_POST['commen'];
    // inset vào database
    $bl = new commen();
    $bl->addCommen($makh,$mahh,$commen);
}
echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=sanphamchitiet&id=' . $mahh . '"/>';

          




?>