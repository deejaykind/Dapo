<!DOCTYPE html>
<html>
  <head>
    <title>DapoDesina|Atelier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/atelier.css">
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font/font.css">
    <script src="css/bootstrap-3.3.7-dist/js/jquery-3.2.0.min.js"></script>
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<body> 
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
              <p class="col_link"><a class="l_m" href="index.php">DapoDesina &gt; </a>Atelier</p> 
            </div>  
          </div>

          <div class="header2">
            <div class="scnd_con">
              <p class="col">Atelier</p>  
            </div>  
          </div>
            <!-- #region Jssor Slider Begin -->
           
          <script type="text/javascript">jssor_1_slider_init();</script>

         <div class="container test" style="width: auto" >
           <div class="row"> 
              <div class="col-md-5">
                  <div class="father">
                    <h3 class="text-left">DAPO DESINA ATELIER</h3>
                  </div>
                  <p style="font-family: Museo; ">
                    Dapo Desina Atelier, is a Fashion label house for women that is soley driven by the art of creativity and love for clothes making. We believe the dresses are not just supposed to be bought without having the pride to wear them afterwards, that is why we do tailor-made clothes that have the very essence of inspiring our clients whenever they come across our products.
                    <br><br>
                    We have discovered that the art of dressing revolves around time and seasons!, this strata is one of the reason why we are here in the fashion world to give you the advantage that helps you evolve easily, given the time we are in, wthout breaking your nest egg during this period of transtion.<br>

                    The Dapo Desina brand has extensive and modern styling culture that we bring to life in every piece of design we make for the market.
                    <br><br>
                    Dapo Desina brand has built a reputation for innovative, inspiring and desirable works in the minds of her clients personally.
                  </p>
                  <div class="father">
                    <h3>VISION</h3>
                  </div>
                  <div class="uche">
                    <p>
                      Our Vision is a World in which every woman owns a piece of our clothing, giving them self-worth through our commitment to quality, constant creativity and respect for the women's body. We aim to exceed expectations and be rewarded with a smile.
                    </p>
                  </div>
                  
                  <div class="father">
                    <h3>MISSION</h3>
                  </div> 
                  <div class="uche">
                  <p>
                    To intentionally; with a heart for excellence help our clients step up their dress sense! with inspiring, Trendy & Classic designs that are readily affordable!
                  </p>
                  </div>
                  
              </div>
              <div class="col-md-7">
                <div class="abtt">
                  <img class="img-responsive pg_img" src="images/atelier.JPG">
                </div> 
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