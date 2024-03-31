<style>
@property --k {
    syntax: "<number>";
    initial-value: 0;
    inherits: false;
}

html,
body {
    display: grid;
}

html {
    height: 100%;
}

body {
    background: #000;
    min-height: 720px;
}

svg[height="0"] {
    position: absolute;
}

.gr-text {
    /* no pseudo needed */
    --k: 0;
    place-self: center;
    background: linear-gradient(90deg, hsl(calc(var(--k)*1turn), 95%, 65%), hsl(calc(var(--k)*1turn + 90deg), 95%, 65%));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    font: 900 clamp(.875em, 7.25vw, 5em) arial black, sans-serif;
    filter: url(#f);
    text-align: center;
    text-transform: uppercase;
    /* needs support for animating custom properties */
    /* Firefox not quite there yet, but it's coming */
    animation: k 4s linear infinite;
}

@keyframes k {
    to {
        --k: 1;
    }
}
</style>
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
</head>

<body>

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
</body>

</html>
<?php
$ac = 1;
if (isset ($_GET['action'])) {
    if ($_GET['action'] == 'sanpham') {
        if (isset ($_GET['act']) && $_GET['act'] == 'caycanh') {
            $ac = 3;
        } else if (isset ($_GET['act']) && $_GET['act'] == 'senda') {
            $ac = 4;
        } else if (isset ($_GET['act']) && $_GET['act'] == 'xuongrong') {
            $ac = 5;
        } else if (isset ($_GET['act']) && $_GET['act'] == 'thuysinh') {
            $ac = 7;
        } else if (isset ($_GET['act']) && $_GET['act'] == 'timkiem') {
            $ac = 6;
        }
    }
}
?>
<?php
//xác định có bao nhiêu sản phẩm, select count(*)
$hh = new hanghoa();
if ($ac == 1) {
    $count = $hh->getHangHoaAll()->rowCount(); //14
} else
    if ($ac == 3) {
        $count = $hh->getCaycanh()->rowCount(); //14
    } else
        if ($ac == 4) {
            $count = $hh->getSenda()->rowCount(); //14
        } else
            if ($ac == 5) {
                $count = $hh->getXuongrong()->rowCount(); //14
            } else
                if ($ac == 7) {
                    $count = $hh->getThuysinh()->rowCount(); //14
                } else
                    if ($ac == 6) {
                        if (isset ($_POST['txtsearch'])) {
                            $tk = $_POST['txtsearch'];
                            $count = $hh->timkiemSanPham($tk)->rowCount();
                        }
                    }

//b2 xác định limit
$limit = 8;
//b3 tính ra là có bao nhiêu trang
$trang = new page();
$page = $trang->findPage($count, $limit); //2trang
//b4: tính ra start
$start = $trang->findStart($limit); //8
//b5 tạo biến chứa trang hiện tại
$current_page = isset ($_GET['page']) ? $_GET['page'] : 1;

?>

<!-- end số lượt xem san phẩm -->
<!-- sản phẩm-->



<!--Section: Examples-->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row">
        <div class="col-lg-8 text-right" >
            <svg width="0" height="0" style="text-align:center ;">
                <filter id="f" x="-50%" y="-200%" width="200%" height="500%" primitiveUnits="objectBoundingBox">
                    <feGaussianBlur stdDeviation=".025 .2"></feGaussianBlur>
                    <feColorMatrix type="saturate" values="1.3"></feColorMatrix>
                    <feBlend in="SourceGraphic"></feBlend>
                </filter>
            </svg>
            <?php
            if ($ac == 1) {
                echo '<h1 class="gr-text">Tất cả sản phẩm</h1>';
            }
            if ($ac == 3) {
                echo '<h1 class="gr-text">Cây cảnh</h1>';
            }
            if ($ac == 4) {
                echo '<h1 class="gr-text">Sen đá</h1>';
            }
            if ($ac == 5) {
                echo '<h1 class="gr-text">Xương rồng</h1>';
            }
            if ($ac == 7) {
                echo '<h1 class="gr-text">Thủy sinh</h1>';
            }
            if ($ac == 6) {
                echo '<h1 class="gr-text">Sản phẩm cần tìm </h1>';
            }

            ?>

        </div>

    </div>
    <!--Grid row-->
    <div class="row">
        <?php
        $hh = new hanghoa();
        if ($ac == 1) {
            // $result = $hh->getHangHoaAll(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllPage($start, $limit); //sp được phân trang
        }

        if ($ac == 3) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getCaycanhPage($start, $limit); //sp được phân trang
        }
        if ($ac == 4) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getSendaPage($start, $limit); //sp được phân trang
        }
        if ($ac == 5) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getXuongrongPage($start, $limit); //sp được phân trang
        }
        if ($ac == 7) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getThuysinhPage($start, $limit); //sp được phân trang
        }
        if ($ac == 6) {
            if (isset ($_POST['txtsearch'])) {
                $tk = $_POST['txtsearch'];
                $result = $hh->timkiemSanPham($tk);
            }
        }

        //đổ từng sp lên view
        while ($set = $result->fetch()) {
            if($set['an']==0){
            ?>
        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-3 text-left">
<div class="card">
    <div class="card-header" >
    <div class="view overlay z-depth-1-half" >
                <img src="Content\image\<?php echo $set['hinh']; ?>" class="img-fluid" alt=""  style="height: 300px;">
                <div class="mask rgba-white-slight"></div>
            </div>
    </div>
    <div class="card-body" style="text-align:center ;" >
    <?php
                if ($ac == 1) {
                    echo ' <h5 class="my-4 font-weight-bold" style="color: red;">' . number_format($set['dongia']) . '<sup><u>đ</u></sup></br>
                </h5>';
                }
                if ($ac == 2) {
                    echo '<h5 class="my-4 font-weight-bold">
                    <font color="red">' . number_format($set['giamgia']) . ' <sup><u>đ</u></sup></font>
                    <strike>' . number_format($set['dongia']) . '</strike><sup><u>đ</u></sup>
                </h5>';
                }
                if ($ac == 6) {
                    echo ' <h5 class="my-4 font-weight-bold" style="color: red;">' . number_format($set['dongia']) . '<sup><u>đ</u></sup></br>
                </h5>';
                }
                ?>


           <h1 style="height: 80px;"> <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>" style="text-decoration: none;">
                <span>
                    <?php echo $set['tenhh'] ?>
                </span></br></a></h1>
                <?php 
                $today = date('Y-m-d');
                $billDate = $set['ngaylap'];
                $diff = date_diff(new DateTime($today), new DateTime($billDate));
                $monthsDiff = $diff->m;
                
                if ($monthsDiff >= 1) {
                    echo ' ';
                  } else {
                    echo '<button class="btn btn-danger" id="may4" value="lap 4">New</button>';
                  } ?>
             <h5>Số lượt xem:<?php echo $set['soluotxem']; ?></h5> 
             <h5>Đơn giá:<?php echo $set['dongia']; ?></h5> 

    </div>
    <div class="card-footer text-muted">
    <button type="button" style="width: 100%;"><a
                    href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>" style="text-decoration: none;">
                    <span>
                        Xem chi tiết
                    </span></br></a></button>
    </div>
</div>
            
            
       
        </div>
        <?php
        }}
        ?>
    </div>

    <!--Grid row-->

</section>


<!-- end sản phẩm mới nhất -->




<div class=" page">
    <ul class="pagination">
        <?php
        if ($ac == 1) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
        <li>
            <a href="index.php?action=sanpham&page=<?php echo "$i"; ?>">
                <button type="button" class="btn btn-lg" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                    <?php echo $i; ?>
                </button>
            </a>
        </li>

        <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
            }
        }


        if ($ac == 3) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&act=caycanh&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
        <li>
            <a href="index.php?action=sanpham&act=caycanh&page=<?php echo "$i"; ?>">
                <button type="button" class="btn btn-lg" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                    <?php echo $i; ?>
                </button>
            </a>
        </li>
        <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&act=caycanh&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
            }
        }
        if ($ac == 4) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&act=senda&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
        <li>
            <a href="index.php?action=sanpham&act=senda&page=<?php echo "$i"; ?>">
                <button type="button" class="btn btn-lg" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                    <?php echo $i; ?>
                </button>
            </a>
        </li>
        <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&act=senda&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
            }
        }
        if ($ac == 5) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&act=xuongrong&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
        <li>
            <a href="index.php?action=sanpham&act=xuongrong&page=<?php echo "$i"; ?>">
                <button type="button" class="btn btn-lg" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                    <?php echo $i; ?>
                </button>
            </a>
        </li>
        <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&act=xuongrong&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
            }
        }
        if ($ac == 7) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&act=thuysinh&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
        <li>
            <a href="index.php?action=sanpham&act=thuysinh&page=<?php echo "$i"; ?>">
                <button type="button" class="btn btn-lg" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                    <?php echo $i; ?>
                </button>
            </a>
        </li>
        <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                    <a href="index.php?action=sanpham&act=thuysinh&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
            }
        }



        ?>
    </ul>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>