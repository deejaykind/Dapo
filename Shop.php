<!DOCTYPE html>
<html>
  <head>
    <title>DapoDesina|Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/shop.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/Gallery.css">
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font/font.css">
    <script src="css/bootstrap-3.3.7-dist/js/jquery-3.2.0.min.js"></script>
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </head>

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

          <div class="" style="width: auto;">
            <div class="header1">
              <div class="first_con">
                <p class="col_link"><a class="l_m" href="index.php">DapoDesina &gt; </a>Shop</p> 
              </div>  
            </div>
            
            <div class="row">
              <div class="col-md-6">
                <h1 class="col" style="float: left; margin: 0px; font-size: 25px;">
                  Shop
                </h1>
              </div>
              <div class="col-md-6">
                <select name="orderby" class="product_details lola" style="float: right; height: 40px; outline: none; border: none; border-radius: 2px; padding: 7px 40px 7px 14px;">
                  <option value="popularity" selected="selected">Sort by popularity</option>
                  <option value="rating">Sort by average rating</option>
                  <option value="date">Sort by newness</option>
                  <option value="price">Sort by price: low to high</option>
                  <option value="price-desc">Sort by price: high to low</option>
                </select>
              </div>
            </div>
            <div class="clearfix"></div>
             
            <script type="text/javascript">jssor_1_slider_init();</script>

            <div class="row">
              <div class="col-md-3 col-xs-6">
                <li class="first">
                  <a href="" class="">
                    <div class="img_div"></div>
                  </a>

                  <div class="product_details">
                    <h3>
                      <a href="">
                        <b>Kimono Set<b>
                      </a>
                    </h3>
                    <span class="posted_in">
                      <a href="">
                        Desina
                      </a>
                    </span>
                  </div>

                  <a href="get_a_quote.php" class="select_option">
                    <div class="div product_details">
                      Get A Quote
                    </div>
                  </a>
                </li>
              </div>

              <div class="col-md-3 col-xs-6">
                <li class="first">
                  <a href="" class="">
                    <div class="col_div"></div>
                  </a>
                  <div class="product_details">
                    <h3>
                      <a href="">
                        <b>Kimono Set<b>
                      </a>
                    </h3>
                    <span class="posted_in">
                      <a href="">
                        Desina
                      </a>
                    </span>
                  </div>

                  <div class="price">
                  </div>

                  <a href="get_a_quote.php" class="select_option">
                    <div class="div product_details">
                      Get A Quote
                    </div>
                  </a>
                </li>
              </div>
              
              <div class="col-md-3 col-xs-6">
                <li class="first">
                  <a href="" class="">
                    <div class="dol_div"></div>
                  </a>
                  <div class="product_details">
                    <h3>
                      <a href="">
                        <b>Kimono Set<b>
                      </a>
                    </h3>
                    <span class="posted_in">
                      <a href="">
                        Desina
                      </a>
                    </span>
                  </div>

                  <div class="price">
                  </div>

                  <a href="get_a_quote.php" class="select_option">
                    <div class="div product_details">
                      Get A Quote
                    </div>
                  </a>
                </li>
              </div>

              <div class="col-md-3 col-xs-6">
                <li class="first">
                  <a href="" class="">
                    <div class="dol_div_1"></div>
                  </a>
                  <div class="product_details">
                    <h3>
                      <a href="">
                        <b>Kimono Set<b>
                      </a>
                    </h3>
                    <span class="posted_in">
                      <a href="">
                        Desina
                      </a>
                    </span>
                  </div>

                  <div class="price">
                  </div>

                  <a href="get_a_quote.php" class="select_option">
                    <div class="div product_details">
                      Get A Quote
                    </div>
                  </a>
                </li>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-xs-6">
                <li class="first">
                  <a href="" class="">
                    <div class="jol_div"></div>
                  </a>
                  <div class="product_details">
                    <h3>
                      <a href="">
                        <b>Kimono Set<b>
                      </a>
                    </h3>
                    <span class="posted_in">
                      <a href="">
                        Desina
                      </a>
                    </span>
                  </div>

                  <div class="price">
                  </div>

                  <a href="get_a_quote.php" class="select_option">
                    <div class="div product_details">
                      Get A Quote
                    </div>
                  </a>
                </li>
              </div>

              <div class="col-md-3 col-xs-6">
                <li class="first">
                  <a href="" class="">
                    <div class="kol_div"></div>
                  </a>
                  <div class="product_details">
                    <h3>
                      <a href="">
                        <b>Kimono Set<b>
                      </a>
                    </h3>
                    <span class="posted_in">
                      <a href="">
                        Desina
                      </a>
                    </span>
                  </div>

                  <div class="price">
                  </div>

                  <a href="get_a_quote.php" class="select_option">
                    <div class="div product_details">
                      Get A Quote
                    </div>
                  </a>
                </li>
              </div>

              <div class="col-md-3 col-xs-6">
                <li class="first">
                  <a href="" class="">
                    <div class="tol_div"></div>
                  </a>
                  <div class="product_details">
                    <h3>
                      <a href="">
                        <b>Kimono Set<b>
                      </a>
                    </h3>
                    <span class="posted_in">
                      <a href="">
                        Desina
                      </a>
                    </span>
                  </div>

                  <div class="price">
                  </div>

                  <a href="get_a_quote.php" class="select_option">
                    <div class="div product_details">
                      Get A Quote
                    </div>
                  </a>
                </li>
              </div>

              <div class="col-md-3 col-xs-6">
                <li class="first">
                  <a href="" class="">
                    <div class="tol_div_1"></div>
                  </a>
                  <div class="product_details">
                    <h3>
                      <a href="">
                        <b>Kimono Set<b>
                      </a>
                    </h3>
                    <span class="posted_in">
                      <a href="">
                        Desina
                      </a>
                    </span>
                  </div>

                  <div class="price">
                  </div>

                  <a href="get_a_quote.php" class="select_option">
                    <div class="div product_details">
                      Get A Quote
                    </div>
                  </a>
                </li>
              </div>
            </div>
            <div class="pagination">
              <a href="Shop.php">&laquo;</a>
              <a class="active" href="Shop.php">1</a>
              <a href="shop_2.php">2</a>
              <a href="shop_2.php">&raquo;</a>
            </div>
               
            <?php
            include ("footer.php");
            ?>
          </div>
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