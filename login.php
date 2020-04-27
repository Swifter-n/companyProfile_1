<?php
require_once "core/init.php";

$error = '';
if(@$_SESSION['user']){
  header("location: index.php");
}else {

  if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

      if(!empty(trim($username)) && !empty(trim($password))){
        if(login_data($username, $password)){
          $_SESSION['user'] = $username;
          header("location: index.php");
        }else {
          $error = 'Maaf Data yang Anda Masukan Salah';
        }
      }else {
        $error = 'Data wajid di isi!';
      }
}

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Selamat Datang di Halaman Login</title>

    <!-- CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="">
   <div class="container">
   <div class="row">
     <div class="col-md-8">

     </div>
     <div class="col-sm-4">
     <div class="col-sm-12 text-center form">
       <form class="form-horizontal" method="POST">
         <h2>Log In</h2>
     <div class="form-group">
       <label for="inputEmail3" class="control-label">Username</label>
       <div class="col-sm-12">
         <input type="text" class="form-control text-center" id="inputEmail3" placeholder="Username" name="username">
       </div>
     </div>
     <div class="form-group">
       <label for="inputPassword3" class="control-label">Password</label><br/>
       <div class="col-sm-12">
         <input type="password" class="form-control text-center" id="inputPassword3" placeholder="Password" name="password">
       </div>
     </div>
     <div class="alert alert-warning alert-dismissible" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <strong>Keterangan: </strong> <?= $error;?>
 </div>
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-success btn-lg pull-right" name="btnLogin">Sign in</button>
       </div>
     </div>
   </form>
     </div>
   </div>
 </div>
   </div>
 </div><!-- End Of Form -->

    <footer>
   <div class="container">
   <div class="row">
   <div class="col-sm-12">
     <small>Copyright &copy; <?php echo date("Y");?> Prototype By Dierera</small>
   </div>
   </div>
   </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php } ?>
