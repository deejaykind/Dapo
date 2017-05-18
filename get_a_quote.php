<!DOCTYPE html>
<html>
  <head>
    <title>DapoDesina|Get a Quote</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/get_a_quote.css">
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
                <p class="col_link"><a class="l_m" href="index.html">DapoDesina &gt; </a>Get a Quote</p> 
              </div>  
            </div>

            <div class="header2">
              <div class="scnd_con">
                <p class="col">Get a Quote</p>  
              </div>  
            </div>

            <div class="" style="width: auto">
              <div class="row">
                <h3 class="fm_style" style="text-align: center;">
                  Kindly Fill the form appropraiately we will get back to you as soon as possible.
                </h3>
                <form action="process_quote_form.php" method="POST">
                  <div class="col-md-6 ">
                    <div class="_size">
                        <div class="form-group">
                          <label class="fm_style" for="name"><strong>Surname:</strong></label>
                          <input type="name" class="form-control form_size" name="Surname" placeholder="Enter Surname" required>
                        </div>
                        <div class="form-group">
                          <label class="fm_style" for="name"><strong>Firstname:</strong></label>
                          <input type="name" class="form-control form_size" name="Firstname" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                          <label class="fm_style" for="email"><strong>Email:</strong></label>
                          <input type="email" class="form-control form_size" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                          <label class="fm_style" for="email"><strong>Phone Number:</strong></label>
                          <input type="text" class="form-control form_size" name="Phone" placeholder="Enter Phone Number" required>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6 ">
                    <div class="form-group look">
                      <label class="fm_style look" for="message"><strong>Message:</strong></label>
                      <textarea placeholder="Message" id="comments" class="form-control size" name="comments" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary look style1">Send Now</button>
                  </div>
                </form>
              </div>
              <br><br><br><br>
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