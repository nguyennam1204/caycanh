<?php
$act="donhang";
if(isset($_GET['act']))
{
    $act=$_GET['act'];

}
switch ($act) {
    case 'donhang':
        include_once "./View/donhang.php";
        break;
        case 'update_donhang':
            include_once "./View/editdonhang.php";
            break;
        case "update_action":
            // nhận thông tin
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $masohd=$_POST['masohd'];
            $tinhtrang=$_POST['tinhtrang'];
   
            
                // dem thông tin update vao database
                $hh=new Donhang();
                $kt=$hh->updateHangHoa($tinhtrang, $masohd);
                if($kt!==false)
                {
                    echo '<script> alert("Update dữ liệu thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=donhang"/>';
                }
                else
                {
                    echo '<script> alert("Update dữ liệu ko thành công")</script>';
                }
            }
            break;
    }