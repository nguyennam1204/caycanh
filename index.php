  <?php
//   include_once "Model/connect.php";
//   include_once "Model/hanghoa.php";\
// spl_autoload
// cách 1:
// spl_autoload_register('myModelClassLoader');
// function myModelClassLoader($className)
// {
//     $path='Model/';
//     include_once $path.$className.'.php';
// }
// cách 2:
session_start();
set_include_path(get_include_path(). PATH_SEPARATOR .'Model/');
  spl_autoload_extensions('.php');
  spl_autoload_register();
  include_once "Model/class.phpmailer.php"
  
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
      <!-- duong link icon cua boostrap4 -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <!--duong link logo facbook  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
      <script src="node_modules/jquery/dist/jquery.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- link đăng nhập -->
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- end link đăng nhập -->
      <link rel="stylesheet" type="text/css" href="Content/CSS/Tour.css" />
      <title>SanPham</title>
  </head>
<style>


button {
  font: inherit;
  background-color: #f0f0f0;
  border: 0;
  color: #242424;
  border-radius: 0.5em;
  font-size: 3rem;
  padding: 0.375em 1em;
  font-weight: 600;
  text-shadow: 0 0.0625em 0 #fff;
  box-shadow: inset 0 0.0625em 0 0 #f4f4f4, 0 0.0625em 0 0 #efefef, 0 0.125em 0 0 #ececec, 0 0.25em 0 0 #e0e0e0, 0 0.3125em 0 0 #dedede, 0 0.375em 0 0 #dcdcdc, 0 0.425em 0 0 #cacaca, 0 0.425em 0.5em 0 #cecece;
  transition: 0.15s ease;
  pointer: cursor;
}
button:active, button:hover {
  translate: 0 0.225em;
  box-shadow: inset 0 0.03em 0 0 #f4f4f4, 0 0.03em 0 0 #efefef, 0 0.0625em 0 0 #ececec, 0 0.125em 0 0 #e0e0e0, 0 0.125em 0 0 #dedede, 0 0.2em 0 0 #dcdcdc, 0 0.225em 0 0 #cacaca, 0 0.225em 0.375em 0 #cecece;
  cursor: pointer;
}
#container {
  position: relative;
  width: 100vw;
  height: 100vh;
}

.leaf {
  position: absolute;
  width: 50px;
  height: 50px;
  background-image: url("./Content/imagetourdien/vforum.vn-204919-nhung-chiec-la-mua-thu-4-removebg-preview.png");
  background-size: cover;
  transform-origin: bottom center;
  animation: fall 2s linear infinite;
}

@keyframes fall {
  0% {
    top: 0;
    left: 0;
    opacity: 1;
    transform: rotate(0deg);
  }
  100% {
    top: 100vh;
    left: calc(${randInt(-20, 20)}%);
    opacity: 0;
    transform: rotate(360deg);
  }
}

</style>
  <body id="container" style="background-image: url('https://genk.mediacdn.vn/N0WoyYblO3QdmZFKPMtKnadHAHTevz/Image/2012/VienChinh/05/wallpaper1_1f6c6.jpg') ;background-position: center center;background-size: cover;">

      <!-- header -->
      <?php
      include_once "View/headder.php";
      ?>
      <!-- hiên thi noi dung -->
      <div class="container">
          <div class="row">
          
              <!-- hien thi noi dung đây -->
              <?php
              $ctrl ="home";
              if(isset($_GET['action'])){
                $ctrl=$_GET['action']; 
              }  
              include_once "Controller/$ctrl.php";
              ?>
          </div>
      </div>
      <?php
      include_once "View/footer.php";
      ?>
      <!-- hiên thị footer -->
  </body>
<script>
//   const container = document.getElementById("container");

// // Vị trí ban đầu của lá
// let cursorX = 0;
// let cursorY = 0;

// document.addEventListener("mousemove", (event) => {
//   cursorX = event.clientX;
//   cursorY = event.clientY;
// });

// setInterval(() => {
//   if (Math.random() > 0.9) {
//     const leaf = document.createElement("div");
//     leaf.classList.add("leaf");
//     leaf.style.left = `${cursorX}px`;
//     leaf.style.top = `${cursorY}px`;
//     container.appendChild(leaf);

//     setTimeout(() => {
//       leaf.remove();
//     }, 8000); // Thời gian hiển thị lá (ms)
//   }
// }, 200); // Tốc độ tạo lá mới (ms)

// function randInt(min, max) {
//   return Math.floor(Math.random() * (max - min + 1)) + min;
// }

</script>
  </html>