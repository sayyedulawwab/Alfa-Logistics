<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="Alfa Logistics" />
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta name="country" content="BD" />
  <meta name="description" content="Alfa Logistics" />
  <meta name="keywords"
    content="alfa logistics, procurement service, procurement service in bangladesh, strategic sourcing, healthcare, medical equipment" />
  <meta name="developer" content="SKODER">


  <!-- Stylesheets -->
  <link
    href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap"
    rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/dark.css" type="text/css" />
  <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

  <link rel="stylesheet" href="css/custom.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
  <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

  <!-- Document Title -->
  <title>Alfa Logistics | Contact</title>

  <!-- Fav -->
  <link rel="shortcut icon" href="images/favicon.png" />

</head>

<body class="stretched">

  <!-- Document Wrapper -->
  <div id="wrapper" class="clearfix">

    <?php include "./header.php"?>
    <!-- Page Title -->
    <section id="page-title" class="page-title-parallax page-title-dark include-header"
      style="padding: 250px 0; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/contactbanner.jpg'); background-size: cover; background-position: center center;">

      <div class="container clearfix">
        <h1>Contact Us</h1>

      </div>

    </section>
    <!-- Content -->
    <section id="content">
      <div class="content-wrap">
        <div class="container clearfix">

          <div class="row align-items-stretch col-mb-50 mb-0">
            <!-- Contact Form -->
            <div class="col-lg-6">

              <div class="fancy-title title-border">
                <h3>Let’s get in touch:</h3>
              </div>

              <div class="form-widget">

                <div class="form-result"></div>

                <form class="mb-0"
                  action="./mailer.php" method="post">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">Name <small>*</small></label>
                      <input type="text" id="name" name="name" value=""
                        class="sm-form-control required" />
                    </div>

                    <div class="col-md-4 form-group">
                      <label for="email">Email <small>*</small></label>
                      <input type="email" id="email" name="email" value=""
                        class="required email sm-form-control" />
                    </div>

                    <div class="col-md-4 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" name="phone" value=""
                        class="sm-form-control" />
                    </div>

                    <div class="w-100"></div>

                    <div class="col-12 form-group">
                      <label for="subject">Subject <small>*</small></label>
                      <input type="text" id="subject" name="subject" value=""
                        class="required sm-form-control" />
                    </div>

                    <div class="w-100"></div>

                    <div class="col-12 form-group">
                      <label for="message">Message <small>*</small></label>
                      <textarea class="required sm-form-control" id="message"
                        name="message" rows="6" cols="30"></textarea>
                    </div>

                    <div class="col-12 form-group d-none">
                      <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck"
                        value="" class="sm-form-control" />
                    </div>

                    <div class="col-12 form-group">
                      <button name="contact" type="submit" tabindex="5" value="Submit"
                        class="button button-3d m-0">Submit Comment</button>
                    </div>
                  </div>



                </form>
              </div>

            </div><!-- Contact Form End -->

            <!-- Google Map -->
            <div class="col-lg-6 min-vh-50">
              <!-- <iframe style="border:0; width: 100%; height: 100%;"
                src="https://maps.google.com/maps?q=niketon%20gulshan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" allowfullscreen></iframe> -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.980130121148!2d90.39856811429613!3d23.71240359614523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b91d0084f947%3A0x61e01f340fb270d0!2s33%20Mitford%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1614439693631!5m2!1sen!2sbd"
                width="600" height="450" frameborder="0" allowfullscreen=""></iframe>
            </div><!-- Google Map End -->
          </div>
        </div>
      </div>
    </section><!-- #content end -->

    <!-- Footer -->
    <?php include "./footer.php"?>
    <!-- #footer end -->

  </div><!-- #wrapper end -->

  <!-- Go To Top -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- JavaScripts -->
  <script src="js/jquery.js"></script>
  <script src="js/plugins.min.js"></script>
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyBPHBkHbxlsp255-WwFSBcj4Eq3WUovF00"></script>

  <!-- Footer Scripts -->
  <script src="js/functions.js"></script>

</body>

</html>