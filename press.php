<!DOCTYPE html>
<html>
  <head>
    <title>DapoDesina|Press</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/press.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font/font.css">
    <script src="css/bootstrap-3.3.7-dist/js/jquery-3.2.0.min.js"></script>
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ninja-slider.css">
    <script src="js/ninja-slider.js" type="text/javascript"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
        function lightbox(idx) {
            //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "block";

            nslider.init(idx);

            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }

        function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
            if (isFullscreen) {
                var ninjaSldr = document.getElementById("ninja-slider");
                ninjaSldr.parentNode.style.display = "none";
            }
        }
    </script>
    <style>
        /*body {font: normal 1.5em Arial;margin:0;background:#FFFFFF;}*/
        /*a {color:#1155CC;}
        ul li {padding: 1px 0;}
        header {display:block;padding:60px 0 10px;background-color:#191919;text-align:center;}
        header a {
            font-family: sans-serif;
            font-size: 24px;
            line-height: 24px;
            padding: 8px 13px 7px;
            color: #4d5256;
            text-decoration:none;
            transition: color 0.7s;
        }
        header a.active {
            font-weight:bold;
            width: 24px;
            height: 24px;
            padding: 4px;
            text-align: center;
            display:inline-block;
            border-radius: 50%;
            background: #4d5256;
            color: #191919;
        }*/
        .gallery img{
            width:179px;
            cursor:pointer;
        }
        .gallery{ 

        }
    </style>
  </head>

<body id="pgAbout">
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a href="index.html">
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
            <p class="col_link"><a class="l_m" href="index.html">DapoDesina &gt; </a>Press</p> 
          </div>  
        </div>
        <div class="header2">
          <div class="scnd_con">
            <p class="col">Press</p>  
          </div>  
        </div>
          <!-- #region Jssor Slider Begin -->
         
        <script type="text/javascript">jssor_1_slider_init();</script>

        <div class="container" style="width: auto;">
          <div class="row" style="width: auto;">
            <div class="col-md-3">
              <a href="images/p_5.jpg" data-lightbox="gallery" data-title="DapoDesina Press"><div class="img_5"></div></a>
            </div>
            <div class="col-md-3">
              <a href="images/p_6.JPG" data-lightbox="gallery" data-title="DapoDesina Press"><div class="img_6"></div></a>
            </div>
            <div class="col-md-3">
              <a href="images/p_7.JPG" data-lightbox="gallery" data-title="DapoDesina Press"><div class="img_7"></div></a>
            </div>
            <div class="col-md-3">
              <a href="images/p_8.JPG" data-lightbox="gallery" data-title="DapoDesina Press"><div class="img_8"></div></a>
            </div>
          </div>

          <div class="row" style="width: auto;">
            <div class="col-md-3">
              <a href="images/p_9.jpg" data-lightbox="gallery" data-title="DapoDesina Press"><div class="img_9"></div></a>
            </div>
            <div class="col-md-3">
              <a href="images/p_10.jpg" data-lightbox="gallery" data-title="DapoDesina Press"><div class="img_10"></div></a>
            </div>
            <div class="col-md-3">
              <a href="images/p_11.jpg" data-lightbox="gallery" data-title="DapoDesina Press"><div class="img_11"></div></a>
            </div>
            <div class="col-md-3">
              <a href="images/p_12.jpg" data-lightbox="gallery" data-title="DapoDesina Press"><div class="img_12"></div></a>
            </div>
          </div>
        </div>

        <div class="content_before_footer">
           
        </div>

        <?php
            include ("footer.php");
        ?>
      </div>
    </div>
  </div>


    <script>
    $(document).ready(function() {
      $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
      });
    });
  </script>
  </body>
</html>