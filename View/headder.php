<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

</head>
<style>
.search {
    padding-top: 35px;
    padding-left: 50px;
}

.btn-facebook,
.btn-user,
.btn-cart {
    background-color: #3b5998;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
    transition: 0.3s;

    &:hover {
        background-color: #2d4373;
    }
}

.fab.fa-facebook-f,
.fas.fa-user,
.fas.fa-shopping-cart {
    margin-top: 5px;
}

.icon-container {
    padding-top: 35px;
}


.line {
    width: 1px;
    height: 40px;
    background-color: #ccc;
    margin: 0 10px;
}

.tooltip {
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
    background-color: #fff;
    border-radius: 5px;
    padding: 5px;
    z-index: 1;
}

.btn-facebook:hover .tooltip {
    opacity: 1;
    visibility: visible;
}

.comment,
.follow {
    display: inline-block;

    border-radius: 5px;

    cursor: pointer;
}

.comment {

    color: white;
}

.follow {
    background-color: #ccc;
    color: black;
}

.black-box {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
    background-color: black;
    padding: 10px;
    border-radius: 5px;
    color: white;
    text-align: center;
    z-index: 1;
    width: 200px;
    /* Chiều rộng của hộp đen */
    margin-top: -20px;
    color: #ccc;
}

.btn-facebook:hover .black-box {
    opacity: 1;
    visibility: visible;
}

/* nav */
.navbar {
    background-color: #F1F1F1;
}

.nav-item.dropdown {
    background-color: #436D4D;
    font-size: xx-large;

}



.dropdown-menu {
    display: none;
}

.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown-menu .dropdown-item {
    font-size: 17px;
    /* Tùy chỉnh kích thước font chữ theo ý muốn */
}

.nav-item a {
    color: #436D4D;
    /* Chỉnh màu chữ */
    text-decoration: none;
    /* Loại bỏ gạch chân */
    transition: 0.3s;
    /* Tạo hiệu ứng chuyển tiếp */
    font-size: x-large;
    margin-left: 15px;

}

.nav-item a:hover {
    color: #F1F1F1;
    /* Chỉnh màu chữ khi hover */
    box-shadow: 0 0 10px #436D4D;
    /* Tạo hiệu ứng box-shadow */
    color: #436D4D;
    /* Chỉnh màu chữ */

}

.navbar-toggler {
    background-color: #436D4D;
    box-shadow: 0 0 10px #436D4D;
    /* Tạo hiệu ứng box-shadow */

}

/* .navbar-toggler-close {
  display: none;
} */
</style>

<body>
    <div class="container">
        <div class="row">
            <div id="logo" class="col-md-3">
                <a href="index.php?">
                    <!-- <img src="https://totorogarden.com/wp-content/uploads/2020/05/rsz_logo-01.png" alt="" width="206"
                        height="100"> -->
                        <img src="./Content/image/logo-removebg-preview.png" alt="" width="206"
                        height="100">
                </a>
            </div>
            <div class="col-md-6 search">
                <form class="form-inline my-2 my-lg-0" action="index.php?action=sanpham&act=timkiem" method="post">
                    <input class="form-control form-control-lg mr-sm-2 " type="text" name="txtsearch"
                        placeholder="Search" style="width: 100%; border-radius: 15px;height: 40px;width: 93%;">
                    <button class="btn btn-outline-success btn-lg position-absolute" type="submit"
                        style="border-radius: 15px; margin-left: 82%;border: none;margin-bottom: 15px;">
                        <i class="fas fa-search"></i>
                    </button>
                    </input>
                </form>
            </div>
            <!-- //icon -->
            <div class="col-md-2 icon-container">
                <!-- <button class="btn-facebook">
                    <i class="fab fa-facebook-f"></i>
                    <div class="black-box">
                        <p class="comment">Follow on Facebook</p>
                    </div>
                </button> -->

                <!-- <div class="line"></div> -->
                <button class="btn-user  btn-lg" style="text-align: center;border-radius: 15px">

                    <a href="index.php?action=user" style="color:white" ><i class="fas fa-user"></i></a>

                </button>
                <button class="btn-cart btn-lg" style="border-radius: 15px">
                    <a href="index.php?action=donhang" style="color:white">
                        <i class="fa fa-shopping-bag" aria-hidden="true" ></i>

                    </a>
                </button>
                <!-- <span>
            <?php
              if(isset($_SESSION['makh'])){
                  echo '<h1 style="color: red; margin-top: 20px; margin-left: 0px;">'.$_SESSION['tenkh'].'</h1>';
              }
              else{
                  echo'<h1 style="color: red; margin-top: 20px; margin-left: 0px;">xin chao</h1>'; 
              }
              ?>
            </span> -->
                <button class="btn-cart btn-lg" style="border-radius: 15px">
                    <a href="index.php?action=giohang" style="color:white">
                        <i class="fas fa-shopping-cart"></i>

                    </a>
                </button>


                <?php
              if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
          ?>
                <p class="badge badge-secondary " style="color: red;">(
                    <?php
                      $total = 0;
                      foreach ($_SESSION['cart'] as $item) {
                          $total += $item['qty'];
                      }
                  if (isset($_POST['decrease']))
                      (
                          $total -= 1
                      );
                      if (isset($_POST['increase']))
                          (
                              $total += 1
                          );
                  

                      echo $total; ?>)</p>
                <?php
              } else {
                  echo '<h1 class="badge badge-secondary " style="color: red; height:auto; width: auto; font-size: larger;" >(0)</h1>';
              }
              ?>

                
            </div>

        </div>
        <!-- menu -->



    </div>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation" style="border-color: #436D4D;">
                <span class="navbar-toggler-icon" style="background-color: #436D4D;"></span>
            </button>


            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Danh mục cây trồng</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <?php
                        $dm=new Danhmuc();
        $result = $dm->getDanhmuc();
        while ($set = $result->fetch()) {
            ?>
                            <a class="dropdown-item"
                                href="index.php?action=sanpham&act=<?php echo $set['act']; ?>&loai=<?php echo $set['iddanhmuc']; ?>"><?php echo $set['ten']; ?></a>


                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?" style="color: #436D4D;">Trang Chủ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=sanpham" style="color: #436D4D;">Tất Cả Sản Phẩm </a>
                    </li>
                    <?php
            if(!isset($_SESSION['makh'])){
            ?>
                    <li class="nav-item">
                        <a href="index.php?action=dangky" class="nav-link" style="color: #436D4D;">Đăng Ký</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?action=dangnhap" class="nav-link" style="color: #436D4D;">Đặng Nhập</a>
                    </li>
                    <?php
            }
            ?>
                </ul>
            </div>
        </div>
    </nav>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>