<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental: Save More on Rental Cars</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--preloader-->
<link rel="stylesheet" href="assets/css/demo.css">
<link rel="stylesheet" href="assets/css/fakeLoader.css">

<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- animate css -->
<link rel="stylesheet" href="assets/css/animate.css">
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/title-icon7.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body id="top">
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-8">
          
        </div>
        <div class="col-md-4">
          <div class="banner_content">
              <h1 class="wow fadeInLeft" data-wow-delay=".6s" data-wow-duration="1s">Find the right car for you</h1>
              <p class="wow fadeInLeft" data-wow-delay="1.2s" data-wow-duration="1s">We have more than a thousand cars for you to choose. </p>
              <a href="#findBestCar" class="btn js-scroll-trigger wow fadeInUp" data-wow-delay="1.6s" data-wow-duration="1.8s">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 

<!-- Resent Cat-->
<section class="section-padding gray-bg clearfix" id='findBestCar'>
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>CarForYou</span></h2>
      <p class="text-beauty">The Online-Rent-a-Car car collection features your classic compact and full-size rental cars. We offer renters a variety of cars suitable for any budget and occasion. This is your go-to collection for everyday budget friendly and quality car rentals. Whether you're trying to road trip on a budget or traveling for work, our car rentals will get you to where you need to be. Make a reservation and pick-up your economy car rental at any of our convenient locations nationwide, including airport locations today.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab wow zoomIn">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="recent-car-list-inner">
<div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive home-page-car" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
<span class="price"><span class="price-rent">৳<?php echo htmlentities($result->PricePerDay);?></span> /Day</span> 
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->VehiclesOverview,0,70);?></p>
</div>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 

<!-- Fun Facts-->
<section class="fun-facts-section clearfix">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m wow fadeIn" data-wow-delay=".2s">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i><span class="my-plugin-counter-1 my-plugin-counter" data-from="0" data-to="100"
                                data-speed="3000" data-refresh-interval="100"></span>+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m wow fadeIn" data-wow-delay=".5s">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i><span class="my-plugin-counter-2 my-plugin-counter" data-from="0" data-to="100"
                                data-speed="3000" data-refresh-interval="100"></span>+</h2>
            <p>New Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m wow fadeIn"  data-wow-delay=".8s">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i><span class="my-plugin-counter-3 my-plugin-counter" data-from="0" data-to="100"
                                data-speed="3000" data-refresh-interval="100"></span>+</h2>
            <p>Used Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m wow fadeIn" data-wow-delay="1.1s">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i><span class="my-plugin-counter-4 my-plugin-counter" data-from="0" data-to="100"
                                data-speed="3000" data-refresh-interval="100"></span>+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-fun-facts"></div>
</section>
<!-- /Fun Facts--> 

<!-- Location map section -->
<section class="location-map clearfix">
    <div class="container-fluid">
      <div class="row">
        <div class="location-map-inner">
        <div class="upper-part-map"><h2>Location</h2></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10328.198203974367!2d90.38871505018632!3d23.762726639978084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf8f91c05c91c809!2sStar+Plus!5e0!3m2!1sen!2sbd!4v1536674831264" width="100%" height="500" frameborder="0" style="border:1px solid #ddd" allowfullscreen></iframe>
        </div>
      </div>
    </div>
</section>
<!-- Map Section -->

<!-- Customer section -->
<section class="satisfied-customer clearfix">
    <div class="container">
      <div class="row">
        <div class="satisfied-customer-inner">
          <div class="col-md-6">
            <div class="satisfied-customer-slick">
              <div class="single-satisfied-customer wow zoomInUp">
                <div class="satisfied-img-part">
                  <img src="assets/images/happy-client-new.jpg" alt="">
                </div>
                <div class="satisfied-content">
                "Definitely the best in this service! I appreciate how you made my trip enjoyable and more comfortable!"
                </div>
                <p class="text-center">Atiq Hasan</p>
              </div>
              <div class="single-satisfied-customer">
                <div class="satisfied-img-part">
                  <img src="assets/images/happy-client-new2.jpg" alt="">              
                </div>
                <div class="satisfied-content">
                "The rent process went smoothly and effortlessly for us. Thank you for your amazing service and for cars!"
                </div>
                <p class="text-center">Abu Moosa</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="satisfied-rightside">
              <h2>Booking and Dealing</h2>
              <p class="text-beauty">Here at Online-Rent-a-Car, we pride ourselves on getting our customers the best possible car hire deals. With our secure search and booking engine, you can compare prices across hundreds of brands, from upper to smaller local rental companies around the country. So what are you waiting for? Book your perfect hire car with Online-Rent-a-Car today!</p>
              <a href="car-listing.php" target="_blank"class="btn wow pulse" data-wow-delay=".7s" data-wow-iteration="2" type='btn'>View all Deals</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- Customer Section -->


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top" class="js-scroll-trigger-nav-2"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Preloader-->
<div class="fakeloader"></div>
<!--Preloader-->

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>
<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
<!--Counter js-->
<script src="assets/js/jquery.countTo.js"></script>
<!-- Jquery Easing -->
<script src="assets/js/jquery.easing.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="slick/slick.min.js"></script>
<!--Preloader-->
<script src="assets/js/fakeLoader.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom Js-->
<script src="assets/js/interface.js"></script>

</body>

</html>