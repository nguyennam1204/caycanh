<?php
class hoadon
{
    function insertHoaDon($makh)
    {
        $db = new connect;
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "insert into hoadon(masohd,makh,ngaydat, tongtien) values (Null,$makh,'$ngay',0)";
        $db->exec($query);
        $select = "select masohd from hoadon order by masohd desc limit 1";
        $sohd = $db->getInstance($select);
        return $sohd[0];
    }
    function insertCTHoaDon($masohd, $mahh, $soluongmua, $thanhtien)
    {
        $db = new connect;
        $query = "insert into cthoadon(masohd,mahh,soluongmua,thanhtien, tinhtrang) values($masohd,$mahh,$soluongmua,$thanhtien,0)";
        $db->exec($query);
    }
    function updateHoaDon($masohd, $makh, $tongtien)
    {
        $db = new connect;
        $query = "update hoadon set tongtien=$tongtien  where masohd=$masohd and makh=$makh";
        $db->exec($query);
    }
    function updateCthanghoa($masohd, $soluongmua)
    {
        $db = new connect;
        $query = "UPDATE cthanghoa
        JOIN cthoadon ON cthanghoa.idmahh = cthoadon.mahh
        SET cthanghoa.soluongton = cthanghoa.soluongton - $soluongmua
        WHERE cthoadon.masohd = $masohd ;";
        $db->exec($query);
    }


function getKhachHangHD($masohd) {
        $db = new connect();
        $select ="SELECT a.masohd,b.tenkh, b.diachi,b.sodienthoai,a.ngaydat from hoadon a, khachhang b
       where a.makh=b.makh and a.masohd=$masohd";
        $result = $db->getInstance($select);
        return $result;
}
function getHangHoaHD($masohd) {
        // $db = new connect();
        // $select = "SELECT DISTINCT a.masohd,b.mahh, c.tenhh,b.thanhtien,b.soluongmua from hoadon a, cthoadon b, hanghoa c
        // where  a.masohd=$masohd and c.mahh=b.mahh";
        // $result = $db->getList($select);
        // return $result;
        $db = new connect();
        $select = "select DISTINCT a.masohd,c.tenhh,b.dongia,a.soluongmua,a.thanhtien, c.hinh
        from cthoadon a, cthanghoa b, hanghoa c WHERE a.mahh=b.idmahh and c.mahh=b.idmahh and a.masohd=$masohd";
        $result = $db->getList($select);
        return $result;
}
// function updateTon($masohd, $mahh, $soluongmua,$soluongton)
// {
//     $db = new connect;
//     $query = "update cthanghoa set soluongton=$soluongton-$soluongmua where masohd=$masohd and mahh=$mahh";
//     $db->exec($query);
// }
}