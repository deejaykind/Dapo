<!DOCTYPE html>
<html>
  <head>
    <title>DapoDesina|Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/contact_us.css">
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
              <p class="col_link"><a class="l_m" href="index.php">DapoDesina &gt; </a>Contact Us</p> 
            </div>  
          </div>

          <div class="header2">
            <div class="scnd_con">
              <p class="col">Contact Us</p>  
            </div>  
          </div>

          <div class="">
            <div class="row">
              <div class="col-md-6">
                <div class="w_size">
                  <h2 class="fm_style"><strong>Get in Touch</strong></h2>
                  <h5 class="fm_style"><b>Please fill out the quick form and we will be in touch with lightening speed.</b>
                  </h5>
                  <form action="process_contact_form.php" method="POST">
                    <div class="form-group">
                      <label class="fm_style" for="name"><strong>Name:</strong></label>
                      <input type="name" class="form-control form_size" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label class="fm_style" for="email"><strong>Email:</strong></label>
                      <input type="email" class="form-control form_size" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label class="fm_style" for="message"><strong>Message:</strong></label>
                      <textarea placeholder="Message" id="comments" class="form-control size" name="comments"></textarea>
                    </div>
                    <!-- <div class="checkbox">
                      <label class="fm_style"><input type="checkbox"> Remember me</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary style1">Submit</button>
                  </form>
                </div>
              </div>

              <div class="col-md-6">
                <div class="w_size">
                  <h3 class="fm_style"><strong>Connect with us:</strong></h3>
                  <p class="fm_style">For support or any questions:<br>
                    Email us at ~ ibidapo.lawal@gmail.com<br>or info@dapodesina.com
                  </p>
                  <p class="fm_style">Old fashioned phone calls work too ~ <br>+2348098306662</p>
                  <br>
                  <h3 class="fm_style"><strong>Dapo Desina NG</strong></h3>
                  <p class="fm_style">4, Funke Zainab Usman Street, Lekki Phase 1.<br> Same road as MTN Project Fame Studio, <br>Victoria Island, Lagos.</p>
                </div>
              </div>
            </div>
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