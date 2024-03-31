<div class="col-md-4 col-md-offset-4">
    <h3><b>DANH SÁCH ĐƠN HÀNG</b></h3>
</div>

    <table class="table bg-light " style="font-size:18px ; text-align:center ;">
        <thead>
            <tr class="table-primary">
                <th>Mã số hóa đơn</th>
                <th>Thông tin sản phẩm</th>
                <th>Ngày đặt</th>

                <th>Thành tiền</th>
                <th>Tình trạng</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php
             if(isset($_SESSION['makh'])){
                $makh=$_SESSION['makh'];
        $hh=new Donhang();
        $result=$hh->getdonhang($makh);
        while($set=$result->fetch()):
      ?>
            <tr>
                <td><?php echo $set['masohd'];?></td>
                <td>
                    <?php
                    $hh1=new Donhang();
                    $result1=$hh1->getHangHoaMSHD($set['masohd']);
                    while($set1=$result1->fetch()){
                    ?>
                    <p><?php echo $set1['tenhh'];?>-số lượng: <?php echo $set1['soluongmua'];?></p>
                    <?php
                    }?>
                </td>
               

                <td><?php echo $set['ngaydat'];?></td>
                <td><?php echo number_format($set['tongtien']);?></td>
                <td>
                    <?php 
                    if( $set['tinhtrang']==0){
                        echo "Đã nhận đơn";
                    }
                    if( $set['tinhtrang']==1){
                        echo "Đang Vận chuyển";
                    }
                    if( $set['tinhtrang']==2){
                        echo "Đã giao hàng";
                    }
                    if( $set['tinhtrang']==3){
                        echo "Hàng bị mất";
                    }
                    ?>
            </td>
             
                
                
            </tr>
            <?php
     endwhile;}
     ?>
        </tbody>
    </table>
