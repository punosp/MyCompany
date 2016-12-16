<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Computer Web Infotech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="bootstrap.min.css">
  <link href="Montserrat.css" rel="stylesheet" type="text/css">
  <link href="Lato.css" rel="stylesheet" type="text/css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #007aff;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #007aff;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #007aff !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="my1Page" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Computer Web Infotech</h1> 
  <p>We specialize in Web design & hardware </p> 
  <form action = "phpMailer.php"class="form-inline" method="POST">
    <input type="email" class="form-control" size="50" placeholder="Email Address" required name="subscriberEmail">
    <button type="submit" class="btn btn-success">Subscribe</button>
  
  
  </form>
</div>
<!-- image slider -->
</div><br>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <center><img src="web-design-heroshot.png" height = "500px" width = "1000px"></center>
      </div>
      <div class="item">
        <center><img src="aid431620-728px-Install-Computer-Hardware-Step-6.png" height = "500px" width = "1000px"></center>
      </div>
      <div class="item">
        <center><img src="Web-Page-Design.png" height = "500px" width = "1000px"></center>
      </div>
      <div class="item">
        <center><img src="maxresdefault.png" height = "500px" width = "1000px"></center>
      </div>
      <div class="item">
        <center><img src="CCTV-1.png" height = "500px" width = "1000px"></center>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      
      <img src="web-design-image-sidebar.png" height = "300px" width = "300px">
      </div>
      <div class="col-sm-8">
      <h2>About<hr>
      <h4> My company make all types of web design . It also sells all type of hardware.</h4>
      </h2>
      <p>ComputerWebInfotech is a reliable and fast growing Top ten Web designing and web development company in bihar. India in the area of best website development and Website design website offers, Top 10 website designing in India, Best web portal and Ecommerce portal, Economy Ecommerce website design Outsourcing company bihar, Best and cheap News portal web design offers, Top 10 Educational websites designing bihar, Top class Website design bihar, Top ten label Graphics designing, Top ten IT software company & Consultancy Services with  web hosting,  SEO including  technical support. We provide web development  offers with buying web hosting mobile application development using Android, Advance Java framework like Struts Hibernate Spring JFC Servlet JSP & EJB. We began as IT software consultant in 2009 and worked with number of companies / firms to develop successful business by highly talented team. We are providing responsive web designing, Parallax web designing, Mobile friendly web designing with seo services our SEO Company.
We develop and design website offers for all kinds of web Portal, Best eCommerce portal with offer prices, Fancy Online Shopping Store(Ecommerce portal), Content Management System ( CMS ), TOP label PHP Web Portal designs, Largest Job Portal Designs, PPC google adwords and Adsence services, Dynamic Websites design with creative and attractive, Affordable price Tour and travel, Hotels, Real Estates, Educational(college, school), NGO, portal development, Economy Social Networking Websites Design etc, with wide variety of options & features .We are providing very low price web development and web design services with expert and experienced web developer and professional website designer at very low rate. Ecommerce web training of internship program, industrial training, summer training and winter training with latest technology, Modern technology and current technology. We are the cheapest service Provider of SEO, SEM, SMO Services Company in India. As we guarantee top 10 search ranking in Google, Yahoo, Bing, MSN etc. We also Provides Advanced SEO Requirements for Your Website which would increase the ranking of your website by our SEO Companyit sells computer , cctv camra as our claint requirement.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-8">
      <h2>Our Work</h2><br>
      <h4><strong>MISSION:</strong> Our mission to give best services to our claint, who connected to us.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="col-sm-4">
    <img src="sideBar2.png" height = "250px" width = "300px">
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
    
</span>
<img src="web_design.png" height = "250px" width = "200px" style="border:5px solid black"><br><br>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#web_design">Web Design</button>
<a href="#myModal">
<div class="modal fade" id="web_design" role="dialog">
    <div class="modal-dialog">

<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Web Design</b></h4>
        </div>
        <div class="modal-body">
          <p>Dynamic Websites design with creative and attractive, Affordable price Tour and travel, Hotels, Real Estates, Educational(college, school), NGO, portal development, Economy Social Networking Websites Design etc, with wide variety of options & features .We are providing very low price web development and web design services with expert and experienced web developer and professional website designer at very low rate</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
</div>
</div>      
    </div>
    <div class="col-sm-4">
      <img src="Computer-Hardware-An-Introduction.png" height = "250px" width = "200px"><br><br>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ch">Computer hardware</button>
<a href="#myModal">
<div class="modal fade" id="ch" role="dialog">
    <div class="modal-dialog">

<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Computer hardware</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
</div>
</div>
    </div>
    <div class="col-sm-4">
      <img src="cctv.png" height = "250px" width = "200px"><br><br>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cctv">CCTV</button>
<a href="#myModal">
<div class="modal fade" id="cctv" role="dialog">
    <div class="modal-dialog">

<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cctv</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <br><br>

  <div class="row slideanim">
    <div class="col-sm-4">
      <img src="Logo-software.png" height = "250px" width = "200px" style="border:5px solid black"><br><br>
       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cs">Computer Software</button>
<a href="#myModal">
<div class="modal fade" id="cs" role="dialog">
    <div class="modal-dialog">

<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Computer Software</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="col-sm-4">
      <img src="LED-Facts-Wallpaper.png" height = "250px" width = "200px"style="border:5px solid black"><br><br>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ld">Led Wall</button>
<a href="#myModal">
<div class="modal fade" id="ld" role="dialog">
    <div class="modal-dialog">

<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Computer Software</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="col-sm-4">
      <img src="android-logo.png" height = "250px" width = "200px"><br><br>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#aa">Android App</button>
<a href="#myModal">
<div class="modal fade" id="aa" role="dialog">
    <div class="modal-dialog">

<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Computer Software</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<!--
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
    -->
  </div><br>
  <center>
  <h2>What our customers say</h2>
  </center>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <img src="Red_Arrow_Left.png" height = "20px" width = "20px">
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <img src="righti.png" height = "20px" width = "20px">
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<!--
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>
-->
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><img src="location.png" height = "20px" width = "20px"></span> Bihar</p>
       <p><img src="WhatsApp_Logo_6.png" height = "20px" width = "20px"></span> +91 8267000565</p>
      <p><span class="glyphicon glyphicon-envelope"></span> computerwebinfotech@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="Mobile No." name="Mobile No." placeholder="Mobile No." type="MobileNo." required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
   <img src="Red_Arrow_Up.png" height = "20px" width = "20px">
  </a>
  <p>
  <br>
  <a href="#" title="Visit w3schools">COMPUTER&nbsp;&nbsp;&nbsp;&nbsp;WEB&nbsp;&nbsp;&nbsp;&nbsp;INFOTECH</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

<?php 

$status = $_GET['status'];
if($status == 'success') {
echo '<script language="javascript">';
echo 'alert("Successfully Subscribed")';
echo '</script>';
}
else if($status == 'fail') {
echo '<script language="javascript">';
echo 'alert("Try Again")';
echo '</script>';
}
?>
