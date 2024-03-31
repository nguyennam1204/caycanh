<?php
class user{
    function inserKhachhang($tenkh,$username,$matkhau,$email,$diachi,$sodt) {
            //B1: kết nối đc với dữ liệu
            $db=new connect();
            // b2: cần lấy cái gì thì truy vấn cái đó
            $query = "INSERT INTO khachhang (makh, tenkh, username, matkhau, email, diachi, sodienthoai) VALUES (NULL, '$tenkh', '$username', '$matkhau', '$email', '$diachi', '$sodt')";
            //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
            $result=$db->exec($query); 
            return $result;// lấy được dữ liệu về
    }
        function checkkh($user,$email) {
            //B1: kết nối đc với dữ liệu
            $db=new connect();
            // b2: cần lấy cái gì thì truy vấn cái đó
            $select = "SELECT * FROM khachhang WHERE username='$user' OR email='$email'";

            //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
            $result=$db->getInstance($select);
            return $result;// lấy được dữ liệu về
    }
            function logKhachHang($user,$pass) {
            //B1: kết nối đc với dữ liệu
            $db=new connect();
            // b2: cần lấy cái gì thì truy vấn cái đó
            $select = "SELECT a.makh, a.tenkh, a.username  FROM khachhang a WHERE a.username='$user' and a.matkhau='$pass'";

            //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
            $result=$db->getInstance($select);
            return $result;// lấy được dữ liệu về
    }
//     function getuser($makh) {
//         $db = new connect();
//         $select = "SELECT DISTINCT a.makh,a.tenkh, a.email,a.diachi,a.sodienthoai from khachhang a
//         where  a.makh=$makh";
//         $result = $db->getInstance($select);
//         return $result;
// }
function getuser($makh) {
        $db = new connect();
        $select = "SELECT DISTINCT a.makh,a.tenkh, a.email,a.diachi,a.sodienthoai, b.masohd, b.ngaydat from khachhang a, hoadon b
        where  a.makh=$makh and a.makh=b.makh order by b.masohd Desc";
        $result = $db->getInstance($select);
        return $result;
}

function checkEmail($email) {
        $db = new connect();
        $select = "select * from khachhang where email='$email'";
        $result = $db->getList($select);
        return $result;
}
}
?>