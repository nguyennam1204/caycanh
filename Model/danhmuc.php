<?php
class Danhmuc{


        function getDanhmuc(){
        $db=new connect();
        $select="SELECT iddanhmuc, hinh, ten, act from danhmuc ";
        $result=$db->getList($select);
        return $result;
    }
}
?>