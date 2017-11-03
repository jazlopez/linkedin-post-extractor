<?php

/**
 * Jaziel Lopez <juan.jaziel@gmail.com>
 * Software Developer
 * Tijuana Area, Mexico, 11/2/17 9:37 PM
 */


$config = [];

require_once 'vendor/autoload.php';

require_once 'config.php';

$url = 'https://www.linkedin.com/oauth/v2/authorization?';

foreach($config as $key => $value):

    $url.= $key . '=' . $value . '&';

endforeach;

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LinkedIn Post Extractor">
    <meta name="author" content="Jaziel Lopez, Experienced Software Developer">

    <title>LinkedIn Post Extractor</title>

    <!-- Bootstrap core CSS -->
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">LinkedIn | Articles API | Post Extractor</a>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p>Network updates serve as one of the core experiences on LinkedIn, giving users the ability to share rich content to their professional network. </p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p>Besides shares, LinkedIn provides enriched article posts to provide better engagement for our members.</p>
                    </div>
                    <div class="col-lg-8 mx-auto text-center">
                        <a href="<?php echo $url ?>" class="btn btn-lg btn-outline">
                            <i class="fa fa-download"></i>
                            Extract Your Posts
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </header>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        https://jlopez.mx
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
