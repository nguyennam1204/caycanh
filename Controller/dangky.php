<?php
$act="dangky";
if(isset($_GET['act'])){
    $act=$_GET['act'];
}
switch ($act) {
    case 'dangky':
    include_once "./View/registration.php";
        break;
    
    case 'dangky_action':
   $tenkh='';
   $dc=' ';
   $sodt=' ';
   $user=' ';
   $pass=' ';
   $email=' ';
   if(isset($_POST['submit'])){
    $tenkh=$_POST['txttenkh'];
   $dc=$_POST['txtdiachi'];
   $sodt=$_POST['txtsodt'];
   $user=$_POST['txtusername'];
   $pass=$_POST['txtpass'];
   $email=$_POST['txtemail'];
       //ma hoa pass
   $f="sadda#";
   $l="121212";
   $passnew=md5($f.$pass.$l);
   $kh=new user();
    // $check=$kh->checkkh($user,$email);
    // $count=$check->rowCount();
    // if($count>0){
    //     echo '<script>alert("user vaf email da ton tai")</script>';
    //     echo '<meta http-equiv="refresh" content="0;url=../index.php?action=dangky"/>';
    // }
    // else{

   $kq=$kh->inserKhachhang($tenkh,$user,$passnew,$email,$dc,$sodt);
   if($kq!=false){
        echo '<script>alert(" thanh")</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';

       

   }
   else{
        echo '<script>alert("ko thanh")</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=registration"/>';

   

//    }

    }

    
   }

        break;


}

?>