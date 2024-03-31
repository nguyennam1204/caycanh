<script type="text/javascript">
function chonsize(a) {
    document.getElementById("size").value = a;

}
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=giohang_action" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->
                    <div class="preview col-md-6">
                        <div class="tab-content">
                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $hh = new hanghoa();
                                $sp = $hh->getHangHoaId($id);
                                $tenhh = $sp['tenhh'];
                                $mota = $sp['mota'];
                                $dongia = $sp['dongia'];
                                $slt = $sp['soluongton'];

                            }
                            ?>
                            <?php
                            $hinh = $hh->getHangHoaHinh($id);
                            $set = $hinh->fetch();
                            ?>
                            <div class="tab-pane active" id=""><img src="Content/image/<?php echo $set['hinh']; ?>"
                                    alt="" width="200px" height="350px">
                            </div>

                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <?php
                            while ($img = $hinh->fetch()):
                                ?>
                            <li class="active"><a href="<?php echo $img['hinh']; ?>" data-toggle="tab">
                                    <img src="Content/image/<?php echo $img['hinh']; ?>"
                                        alt="Hoc thiet ke web ban hang online">
                                </a>
                            </li>
                            <?php
                            endwhile;
                            ?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $id; ?>" />
                        <h3 class="product-title">
                            <?php echo $tenhh; ?>
                        </h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $mota; ?>
                        </p>
                        <h4 class="price">Giá bán:
                            <?php echo number_format($dongia); ?>đ
                        </h4>



                        <input type="hidden" name="size" id="size" value="0" />


                        </br></br>
                        Số Lượng:

                        <input type="number" id="soluong" name="soluong" min="1" max="<?php echo $slt; ?>" value="1"
                            size="10" />


                        <h5>Số lượng tồn:
                            <?php echo $slt; ?>
                        </h5>


                        <div class="action">
                            <?php
                            if($slt>0){
                            ?>

                            <button class="add-to-cart btn btn-success " type="submit" data-toggle="modal"
                                data-target="#myModal">MUA NGAY
                            </button>
                            <?php
                            } else{
                            
                            ?>
                                
                                <button class="add-to-cart btn btn-default"  data-toggle="modal"
                                data-target="#myModal">Hàng đã hết
                            </button>
                            <?php
                            }
                            ?>

                            <!-- <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default"
                                    type="button"><span class="fa fa-heart"></span></button> </a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>


<?php
    if (isset($_SESSION['makh'])):
        ?>
        <!-- <p class="float-left"><b>BÌnh luận </b></p> -->
        
        </div>
        <form action="index.php?action=binhluan" method="post">
        <h1><b>BÌnh luận </b></h1>
<br>
            <div class="row ">

                <input type="hidden" name="mahh" id="mahh" value="<?php echo $id; ?>" />
                <img src="./Content/imagetourdien/people.png" width="50px" height="50px" ; />
                <textarea class="input-field" type="text" name="commen" rows="2" cols="70" id="commen"
                    placeholder="Thêm bình luận">  </textarea>
                <input type="submit" class="btn" id="submitButton"
                    style="float: right; background-color: #498374; color: #fff  ; " value="Bình Luận" />

            </div>

        </form>
        
        <div class="row">
            <p class="float-left"><b>Các bình luận</b></p>
            <hr>
            <?php
            $bl = new commen();
            $noidung = $bl->selectBinhLuan($id);
            while ($set = $noidung->fetch()):
                ?>
                <div class="col-12 mb-3">
                    <div class="row">

                        <p>
                            <img src="Content/img/avatar1.png" alt="" width="30px" height="30px">
                            <?php echo '<b>' . $set['username'] . ': </b>'; ?>
                            <br>
                            <span class="ml-5">
                                <?php echo $set['commen'] ?>
                            </span>
                        </p>

                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
    <?php endif; ?>


<!-- // -->
