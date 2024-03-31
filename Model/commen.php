<?php
class commen
{

    function addCommen($makh,$mahh,$commen)
    {
        $db = new connect();
        $query = "insert into commen(idcommen, makh, mahh, commen) values (NULL, $makh,$mahh,'$commen')";
        $db->exec($query);
    }
    function selectBinhLuan($mahh)
    {
        $db = new connect();
        $select = "SELECT a.username,b.commen FROM khachhang a, commen b WHERE a.makh=b.makh and b.mahh=$mahh";
        $result = $db->getList($select);
        return $result;
    }

}