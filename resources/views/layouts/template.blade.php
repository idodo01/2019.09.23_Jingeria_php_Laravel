<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Solid - Bootstrap Business Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900|Lato:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="/lib/hover/hoverex-all.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Solid
    Template URL: https://templatemag.com/solid-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="{{route('main')}}">JINGERIA</a>
      </div>
      <div class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="{{route('main')}}">HOME</a></li>
          <li><a href="{{route('about')}}">ABOUT</a></li>
          <li><a href="{{route('menu')}}">MENU</a></li>
          <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="blog.html">BLOG</a></li>
              <li><a href="single-post.html">SINGLE POST</a></li>
              <li><a href="portfolio.html">PORTFOLIO</a></li>
              <li><a href="single-project.html">SINGLE PROJECT</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

 <!-- *****************************************************************************************************************
   CONTENT
  ***************************************************************************************************************** -->
  
  @yield('content')
  
  <!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
  <div id="footerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>About</h4>
          <div class="hline-w"></div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="col-lg-4">
          <h4>Social Links</h4>
          <div class="hline-w"></div>
          <p>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-tumblr"></i></a>
          </p>
        </div>
        <div class="col-lg-4">
          <h4>Our Address</h4>
          <div class="hline-w"></div>
          <p>
            Some Ave, 987,<br/> 23890, New York,<br/> United States.<br/>
          </p>
        </div>

      </div>
    </div>
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Solid</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/solid-bootstrap-business-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Solid template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/lib/php-mail-form/validate.js"></script>
  <script src="/lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="/lib/isotope/isotope.min.js"></script>
  <script src="/lib/hover/hoverdir.js"></script>
  <script src="/lib/hover/hoverex.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>

</body>
</html>
