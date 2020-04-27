<?php
require_once "core/init.php";

if(@!$_SESSION['user']){
  header("location: login.php");
}else {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Selamat Datang di Halaman Utama</title>

    <!-- CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include "view/header.php"; ?>
    <div id="ims">
    <div class="container">
    <div class="row">
      <div class="col-md-3">
      <ul class="nav nav-pills nav-stacked text-center">
      <li role="presentation" class="active"><a href="ims.php?vendor">Vendor</a></li>
      <li role="presentation"><a href="ims.php?product">Product</a></li>
      <li role="presentation"><a href="ims.php?costumer">Customer</a></li>
        <li role="presentation"><a href="ims.php?purchase">Purchase</a></li>
          <li role="presentation"><a href="ims.php?sales">Sales</a></li>
            <li role="presentation"><a href="ims.php?invoice">Invoice</a></li>
              <li role="presentation"><a href="ims.php?account">Account</a></li>
                <li role="presentation"><a href="ims.php?stock">Stock</a></li>
                  <li role="presentation"><a href="ims.php?payment">Payment</a></li>
                    <li role="presentation"><a href="ims.php?barcode">Barcode</a></li>
      </ul>
      </div>
    <div class="col-md-9">
      <?php
      if(isset($_GET['costumer'])){
        include "file/costumer.php";
      }else if(isset($_GET['product'])){
        include "file/product.php";
      }else if(isset($_GET['purchase'])){
        include "file/purchase.php";
      }else if(isset($_GET['sales'])){
        include "file/sales.php";
      }else if(isset($_GET['invoice'])) {
        include "file/invoice.php";
      }else if(isset($_GET['account'])){
        include "file/account.php";
      }else if(isset($_GET['stock'])){
        include "file/stock.php";
      }else if(isset($_GET['payment'])){
        include "file/payment.php";
      }else if(isset($_GET['barcode'])){
        include "file/barcode.php";
      }else{
        include "file/vendor.php";
      }
       ?>

    </div>
    </div>
    </div>
    </div><!-- End Of Bar -->

     <?php include "view/footer.php"; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php } ?>
