<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>GPU Inc.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
        width: 100%;
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">PROFILE</a></li>
        <li><a href="#tour">CART</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">FEATURED</a></li>
            <li><a href="#">BOOKMARKS</a></li>
            <li><a href="#">WISHLIST</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

 
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img.jpg" alt="Some img, idk Yet" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Titan X</h3>
          <p>Titan X graphics card</p>
        </div>      
      </div>

      <div class="item">
        <img src="img.jpg" alt="Some Img idk yet" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Liquid Cooling system</h3>
          <p> Note to self put a liquid cooling system on sale</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="WOW.jpg" alt="Prefect Text" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Lower Nividia Graphics Card</h3>
          <p>Include a cheaper version of the titan X </p>
        </div>      
      </div>
    </div>

 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<div id="band" class="container text-center">
  <h3></h3>
  <p><em>Welcome to GPU Inc!</em></p>
  <p>We provide our customers with the best hardware money can buy at the most reasonable prices for gamers!!</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="idk yet.jpg" class="img-circle person" alt="Some Product Idk Yet" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
  <br class="clear">
</div>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="productOne.jpg" class="img-circle person" alt="Product  Two" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>More</p>
        <p>information</p>
        <p>about this product</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="Oriduct Three.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>More </p>
        <p>information</p>
        <p>about this product</p>
      </div>
    </div>
  </div>
</div>


<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Most Popular Porducts</h3>
    <p class="text-center">These are the most popular products!<br> Based on user review and sales rates!</p>
    <ul class="list-group">
      <li class="list-group-item">Titan Xr <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">Nividea Shield <span class="label label-danger">Sold Out!</span></li> 
      <li class="list-group-item">Liquid cooling system <span class="badge">3 Left!</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Well.jpg" alt="No img yet still working..." width="400" height="300">
          <p><strong>Proceed to checkout</strong></p>
          <p>Our </p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Procced to Checkout</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="None.jpg" alt="Nothing Here" width="400" height="300">
          <p><strong>Proceed to checkout</strong></p>
          <p>Subscribe for only $25 a month and recieve free shipping and haldling on every purchase!!!</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Subscribe</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Yet.jpg" alt="Nothing Here" width="400" height="300">
          <p><strong>Proceed to checkout</strong></p>
          <p>Complete Purhase</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">See More</button>
        </div>
      </div>
    </div>
  </div>
  

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Subscription</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Subscribe for only $25 a month an recieve free shipping on every purchase!</label>
              <input type="number" class="form-control" id="psw" placeholder="How many months?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>>

</div

<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We will respond accordingly to your submissions.</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Leave us a review!!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Arizona, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: someone@mymail.com</p>	   
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>	
    </div>
  </div>
  <br>
  <h3 class="text-center">Featured Products</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Titan X</a></li>
    <li><a data-toggle="tab" href="#menu1">Nividea Shield</a></li>
    <li><a data-toggle="tab" href="#menu2">Liquid Cooling system</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>The Titan X</h2>
      <p>The Titan x graphics card has XYZ</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>The Nividea Shield</h2>
      <p>Nivedia Shield is a portable gaming console for any on the go android gamer!</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Liquid Cooling system</h2>
      <p>This Colling system contains Freon for the optimal tempature to gain optimal gaming proformance. </p>
    </div>
  </div>
</div>

<div id="googleMap"></div>


<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>


<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Copyright && Zeus Yousif 2016</p> 
</footer>

<script>
$(document).ready(function(){

  $('[data-toggle="tooltip"]').tooltip(); 
  
  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    
    event.preventDefault();

   
    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   

      window.location.hash = hash;
    });
  });
})
</script>

</body>
</html>
