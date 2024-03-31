<div class="table-responsive">
    <?php
  function delete($index)
  {

    unset($_SESSION['cart'][$index]);


    $_SESSION['cart'] = array_values($_SESSION['cart']);
  }

  //xoa 1 san pham
  if (isset($_POST['btnDelete'])) {
    $index = $_POST['btnDelete'];
    $result = delete($index);
    if ($result) {
      $total = count($_SESSION['cart']);
      $sub_total = $gh->sub_total();
      $_SESSION['total'] = $total;
      $_SESSION['sub_total'] = $sub_total;

      
    }
  }
  //xóa tất cả
  if (isset($_POST['btnDeleteAll'])) {

    unset($_SESSION['cart']);


  }
  //
    function decrease($index, $soluong)
    {
      if ($soluong <= 1) {
        unset($_SESSION['cart'][$index]);
      } else {
        $_SESSION['cart'][$index]['qty'] = $soluong - 1;
        $total_new = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['cost'];
        $_SESSION['cart'][$index]['total'] = $total_new;

        // Cập nhật lại tổng tiền
        $gh = new giohang();

        $total = count($_SESSION['cart']);
        $sub_total = $gh->sub_total();  // Giả sử hàm sub_total() đã được định nghĩa
        $_SESSION['total'] = $total;
        $_SESSION['sub_total'] = $sub_total;
      }
    }

    function increase($index, $soluong)
    {
      if ($soluong <= 0) {
        unset($_SESSION['cart'][$index]);
      } else {
        $_SESSION['cart'][$index]['qty'] = $soluong + 1;
        $total_new = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['cost'];
        $_SESSION['cart'][$index]['total'] = $total_new;

        // Cập nhật lại tổng tiền
        $gh = new giohang();

        $total = count($_SESSION['cart']);
        $sub_total = $gh->sub_total();
        $_SESSION['total'] = $total;
        $_SESSION['sub_total'] = $sub_total;
      }
    }

    // ... (phần code còn lại)
    
    if (isset($_POST['decrease'])) {
      $index = $_POST['decrease'];
      decrease($index, $_SESSION['cart'][$index]['qty']);

    }

    if (isset($_POST['increase'])) {
      $index = $_POST['increase'];
      increase($index, $_SESSION['cart'][$index]['qty']);

    }







  if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    ?>
    <form action="" method="post">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td colspan="5">
                        <h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2>
                    </td>
                </tr>
                <tr class="table-success">
                    <th>Số TT</th>
                    <th>Thông Tin Sản Phẩm</th>

                    <th colspan="2">Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php
          $j = 0;
          foreach ($_SESSION['cart'] as $key => $item) {
            $j++;
            ?>
                <tr>
                  
                    <td>
                        <?php echo $j; ?>
                    </td>
                    <td>
                        <img width="50px" height="50px" src="Content\image\<?php echo $item['hinh'];?>">
                        <?php echo $item['name']; ?>
                    </td>

                    <td>Đơn Giá:
                        <?php echo $item['cost']; ?> - Số Lượng:
                        <button type="submit" class="btn btn-primary" name="decrease"
                            value="<?php echo $key;?>">-</button>
                        <input type="number" name="newqty[]" min="0" value="<?php echo $item['qty'];?>" />
                        <button type="submit" class="btn btn-primary" name="increase"
                            value="<?php echo $key;?>">+</button>
                        <br />
                        <p style="float: right;"> Thành Tiền
                            <?php echo number_format($item['total']); ?><sup><u>đ</u></sup>
                        </p>
                    </td>
                    <td><button type="submit" class="btn btn-danger" name="btnDelete"
                            value="<?php echo $key;?>">Xóa</button>
                    </td>
                </tr>
                <?php
          }
          ?>
                <tr>
                    <td colspan="3">
                        <b>Tổng Tiền</b>
                        <button type="submit" class="btn btn-danger" name="btnDeleteAll">Xóa
                            Hết
                        </button>
                    </td>
                    <td style="float: right;">
                        <b>
                            <?php
                $gh = new giohang();
                
                echo $gh->sub_Total();
                ?>
                            <sup><u>đ</u></sup>
                        </b>
                    </td>
                    <td><a href="index.php?action=thanhtoan">Thanh toán</a></td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
  } else {
    echo '<script> alert("Giỏ hàng chưa có hàng");</script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
  }
  ?>
</div>
</div>