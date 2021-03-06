<!DOCTYPE html>
<html>
  <head>
    <title>DapoDesina|The Designer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/The designer.css">
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
          <div class="header1">
            <div class="first_con">
              <p class="col_link"><a class="l_m" href="index.php">DapoDesina &gt; </a>The Designer</p> 
            </div>  
          </div>

          <div class="header2">
            <div class="scnd_con">
              <p class="col">The Designer</p>  
            </div>  
          </div>
            <!-- #region Jssor Slider Begin -->
           
          <script type="text/javascript">jssor_1_slider_init();</script>

          <div class="container" style="width: auto;">
            <div class="row">
              <h1 class="father text-center" style="padding: 20px 0px 20px 0px; margin-bottom: 0px; margin-top: 20px;">THE WORLD OF FASHION IS AT YOUR FINGER TIPS</h1>
                
              <div class="col-md-7">
                <div class="ark">
                  <img class="img-responsive pg_img" src="images/dapo.png">
                </div> 
              </div>

              <div class="col-md-5" style="padding: 30px;">
                <table style="">
                  <tbody>
                    <tr>
                        <th class="father" style="padding: 0px 0px 5px 0px; text-transform: uppercase;">
                          the designer's profile
                        </th>
                    </tr>
                    <tr>
                      <td class="fatherrr">
                        My name is Ibidapo Lawal, I am a Fashion designer, Based In Lekki.<br> 
                        <b>DAPO DESHINA LABEL</b> Is a projection of a dream for me. 
                        The label is for a woman who is
                        fearless, confident and not afraid 
                        to express herself through what 
                        she wears; because IMAGE is EVERYTHING!<br>
                        Our designs are chic, fresh and very modern.
                      </td>
                    </tr>
                     
                  </tbody>
                </table>
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