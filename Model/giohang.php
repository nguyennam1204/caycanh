<?php
class giohang
{
    // phương thức thêm thông tin vào trong gio hàng
    function addCart($mahh, $soluong)
    {
        // thiếu hình,thiếu tên, thiếu đơn giá.Từ id truy vấn ngược lại
        $sp = new hanghoa();
        $idsp = $sp->getHangHoaId($mahh);

        $tensp = $idsp['tenhh'];
        $dongia = $idsp['dongia'];
        $hinh=$idsp['hinh'];
        $total = $soluong * $dongia;

        // vì giở hàng là mảng lưu trữ nhiều đối tượng có thuộc tính giống nhau nên tạo tối tượng
        $flag = false;
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] == $mahh) {
                $flag = true;
                $soluong += $_SESSION['cart'][$key]['qty'];
                $this->update($key, $soluong);
            }
            
        }
        if ($flag == false) {
            $item = array(
                'hinh'=>$hinh,
                'mahh' => $mahh,
                'name' => $tensp,
                'cost' => $dongia,
                'qty' => $soluong,
                'total' => $total,
            );
            // đem tối tượng đưa vào giỏ hàng a[]
            $_SESSION['cart'][] = $item;
        }
    }
    function sub_Total()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal = number_format($subtotal, 2);
        return $subtotal;
    }
    function update($index, $soluong)
    {
        if ($soluong <= 0) {
            unset($_SESSION['cart'][$index]);
        } else {
            $_SESSION['cart'][$index]['qty'] = $soluong;
            $total_new = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['cost'];
            $_SESSION['cart'][$index]['total'] = $total_new;
        }
    }






}
?>