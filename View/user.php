
  <div class="container">
    <div class="header" style="align-content: center;">
      <h1> Thông tin người dùng</h1>
    </div>
    <div class="content">
      <!-- <div class="avatar">
        <img src="avatar.jpg" alt="Avatar">
      </div> -->
      <?php
            if (isset($_SESSION['makh'])) {
                $makh = $_SESSION['makh'];
                $hd = new user();
                $khhd = $hd->getuser($makh);
                $tenkh = $khhd['tenkh'];
                $dc = $khhd['diachi'];
                $sodt = $khhd['sodienthoai'];
                $email = $khhd['email'];
?>
      <div class="info">
      <div class="card">
  
  <div class="card-body">
    
  <ul style=" list-style-type: none; ">
          <li>
            <h1 style="color:black">Tên:  <?php echo $tenkh; ?></h1>
           
          </li>
          <li>
            <h1  style="color:black">Địa chỉ:<?php echo $dc; ?></h1>
            
          </li>
          <li>
            <h1  style="color:black">Email:<?php echo $email; ?></h1>
            
          </li>
          <li>
            <h1  style="color:black">Số điện thoại:<?php echo $sodt; ?></h1>
          
          </li>
        </ul>
        <button type="button"><a href="index.php?action=dangnhap&act=dangxuat" class="nav-link" style="color: #436D4D;">Đặng xuất</a>
</button>
      
  </div>
</div>

 
        
      </div>
      <?php
    };
    ?>

    </div>
  </div>
