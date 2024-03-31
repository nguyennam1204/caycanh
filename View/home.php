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
<style>
.badge {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    padding-left: 100px;
}
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Danh mục sản phẩm</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card" style="height: 200px;">

                        <div class="card-body" style="background-color: aqua;">
                            <div class="row">
                                <?php
                                $dm = new Danhmuc();
                                $result = $dm->getDanhmuc();
                                while ($set = $result->fetch()) {
                                    ?>
                                <div class="col-md-3">
                                    <a href="index.php?action=sanpham&act=<?php echo $set['act']; ?>">
                                        <img src="Content\image\<?php echo $set['hinh']; ?>" alt="Danh mục 2"
                                            class="img-fluid rounded-circle" width="200px">
                                    </a><br>
                                    <h1 class="badge badge-secondary danhmuc">
                                        <?php echo $set['ten']; ?>
                                    </h1>

                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- danh mục -->
    <!--Section: Examples-->
    <section id="examples" class="text-center">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-8 text-right">
                <h3 class="mb-5 font-weight-bold" style="color: red;padding-top: 20px;">SẢN PHẨM MỚI NHẤT</h3>
            </div>
            <div class="col-lg-4 text-right mt-4">
                <a href="index.php?action=sanpham" style="text-decoration: none;">
                    <span style="color: gray;font-size: x-large;">Xem chi tiết>></span>
            </div>
            </a>


        </div>
        <!--Grid row-->
        <div class="row">
            <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoaMoi();
            while ($set = $result->fetch()) {
                if ($set['an'] == 0) {
                    ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">
                <div class="card">
                    <div class="card-header">
                        <div class="view overlay z-depth-1-half">
                            <img src="Content\image\<?php echo $set['hinh']; ?>" class="img-fluid" alt=""
                                style="height: 300px;">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h3 class="my-4 font-weight-bold">
                            <?php echo $set['dongia']; ?><sup><u>đ</u></sup>
                        </h3>

                       <h2 style="height: 80px;"> <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>" style="text-decoration:none ;">
                            <span style="font-size: larger;text-decoration: none; ">
                                <?php echo $set['tenhh'] ?>
                            </span></br></a></h1>
                        
                    </div>
                    <div class="card-footer text-muted">
                    <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                        <h5>Số lượt xem:
                            <?php echo $set['soluotxem']; ?>
                        </h5>
                        <h5>Số lượng tồn:
                            <?php echo $set['soluongton']; ?></h5>
                    </div>
                </div>





            </div>
            <?php }
            } ?>


        </div>

        <!--Grid row-->

    </section>
    <!-- end sản phẩm mới nhất -->

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
<!-- danh mục -->