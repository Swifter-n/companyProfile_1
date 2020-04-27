<div id="menu">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <img src="images/logo.png" alt="Logo Perusahaan" class="img-responsive"/>
        </div>
    </div>
    <div class="col-sm-12">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <span class="navbar-brand visible-xs-block">Navigation &rarr;</span>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?home">Home</a></li>
                <li><a href="ims.php">How to use IMS</a></li>
                <li><a href="https://drive.google.com/file/d/0B0Sc5Qs-YiMVNTIzT21iU3lfeWs/view?usp=sharing" target="_blank">Download Manual Book</a></li>
                <li><a href="index.php?logout">Logout</a></li>
                <li><a href="#">Hi, <?= $_SESSION['user'];?></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>
    </div>
  </div>
</div>
