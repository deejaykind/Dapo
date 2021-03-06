<!DOCTYPE html>
<html>
	<head>
		<title>DapoDesina|Collections</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/collections.css">
		<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font/font.css">
		<script src="css/bootstrap-3.3.7-dist/js/jquery-3.2.0.min.js"></script>
		<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</head>

	<body id="">
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a href="index.php">
            <img class="main_logo" src="images/logo.png" alt="brand_logo" width="165px" height="73px">
          </a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav pull-right" style="margin-top: 10px;">
          <li class="">
            <a href="#">
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.navbar -->

    <div class="row-offcanvas row-offcanvas-left">
      <?php
        include ("header.php");
      ?>
      <div id="main">
        <div class="col-md-12">
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas" style="margin-top: 40px; position: fixed; z-index: 1;"><i class="glyphicon glyphicon-chevron-left" style="font-size: 20px;"></i></button>
          </p>
          <div class="header1">
            <div class="first_con">
              <p class="col_link"><a class="l_m" href="index.php">DapoDesina &gt; </a>Collection</p> 
            </div>  
          </div>

          <div class="header2">
            <div class="scnd_con">
              <p class="col">Collection</p>  
            </div>  
          </div>

          <header id="myCarousel" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill fill_4"></div>
                </div>
                <div class="item">
                    <div class="fill fill_2"></div>
                </div>
                <div class="item">
                    <div class="fill fill_3"></div>
                </div>
                <div class="item">
                    <div class="fill fill_5"></div>
                </div>
                <div class="item">
                    <div class="fill fill_6"></div>
                </div>
                <div class="item">
                    <div class="fill fill_7"></div>
                </div>
                <div class="item">
                    <div class="fill fill_8"></div>
                </div>
                <div class="item">
                    <div class="fill fill_9"></div>
                </div>
                <div class="item">
                    <div class="fill fill_10"></div>
                </div>
                <div class="item">
                    <div class="fill fill_11"></div>
                </div>
                <div class="item">
                    <div class="fill fill_12"></div>
                </div>
                <div class="item">
                    <div class="fill fill_13"></div>
                </div>
                <div class="item">
                    <div class="fill fill_14"></div>
                </div>
                <div class="item">
                    <div class="fill fill_15"></div>
                </div>
                <div class="item">
                    <div class="fill fill_16"></div>
                </div>
                <div class="item">
                    <div class="fill fill_17"></div>
                </div>
                <!-- <div class="item">
                    <div class="fill fill_18"></div>
                </div> -->
                <div class="item">
                    <div class="fill fill_19"></div>
                </div>
                <div class="item">
                    <div class="fill fill_20"></div>
                </div>
                <div class="item">
                    <div class="fill fill_21"></div>
                </div>
                <div class="item">
                    <div class="fill fill_22"></div>
                </div>
                <div class="item">
                    <div class="fill fill_23"></div>
                </div>
                <div class="item">
                    <div class="fill fill_24"></div>
                </div>
                <div class="item">
                    <div class="fill fill_25"></div>
                </div>
                <div class="item">
                    <div class="fill fill_26"></div>
                </div>
                <div class="item">
                    <div class="fill fill_27"></div>
                </div>
                <div class="item">
                    <div class="fill fill_1"></div>
                </div>
                <div class="item">
                    <div class="fill fill_28"></div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev" style="font-size: 30px; color: red;"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next" style="font-size: 30px; color: red;"></span>
            </a>
          </header>
           
          <?php
            include ("footer.php");
          ?>
        </div>
      </div>
    </div><!--/row-offcanvas -->

    <script>
      $(document).ready(function() {
        $('[data-toggle=offcanvas]').click(function() {
          $('.row-offcanvas').toggleClass('active');
        });
      });
    </script>

    <script>
      $('.carousel').carousel({
          interval: 5000 //changes the speed
      })
    </script>
  </body>
</html>