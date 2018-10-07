<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>CarForYou - Responsive Car Dealer HTML5 Template</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
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
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

.payment-col {
  text-align: center;
  margin: auto;
  max-width: 250px;
  margin-bottom: 20px;
  padding: 20px 30px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0px 0px 1px 1px rgba(0,0,0, .05);
  -moz-box-shadow: 0px 0px 1px 1px rgba(0,0,0, .05);
  box-shadow: 5px 5px 5px 0px rgba(0,0,0, .1);
  cursor: pointer;
  background-image: linear-gradient(to bottom , #f5f5f5, #f9f9f9);
  border: 1px solid rgba(0,0,0, .2);
}
.payment-inner{
  border:1px solid lightgray;
  
}
.img-bottom-payment{
  margin-bottom:10px;
}
    </style>
</head>
<body id="top">

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header payment_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Payment Method</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Payment Method</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Payment-Method-->
<section class="Payment-method section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <div class="payment-inner">
          <h4 class="text-uppercase text-center" style="background: #eee;padding:8px 10px"> Payment Method</h4><br>
          <div class="row">
            <div class="col-md-6">
              <div class="payment-col"><a href="https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fcgi-bin%2Fwebscr%3fcmd%3d_account" target="_blank" class="paypal-link"><img class="img-bottom-payment" src="assets/images/payment1.png" alt="" height="50"></a><br>Pay by your International debit or credit card with the secure Paypal gate way:
              </div>
            </div>
            <div class="col-md-6">
              <div class="payment-col">
                  <img class="img-bottom-payment" src="assets/images/bkash.jpg" alt="" height="50"><br>Make a Bkash payment: 0177-262-7949
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="payment-col"><img class="img-bottom-payment" src="assets/images/payment2.jpg" alt="" height="50"><br>Make a Rocket - Dutch-Bangla Bank payment: Dutch-Bangla Bank
                  <p>ACC Name: Bd Rent a Car<br>
                  ACC Number: 0177-262-7949</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="payment-col">
                <img class="img-bottom-payment" src="assets/images/dbbl.jpg" alt=""  height="50"><br>Deposit to the banck account: XXXXXXXXXXXX
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="payment-col"><img class="img-bottom-payment" src="assets/images/driver-payment.jpg" alt="" width="100"  height="55"><br>Give the payment to the driver after finishing your travel.
                </div>
              </div>
              <div class="col-md-6">
                <div class="payment-col"><img class="img-bottom-payment" src="assets/images/office-payment.jpg" alt="" width="100"  height="55"><br>
                Come to our office and make a payment
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="payment-col"><img class="img-bottom-payment" src="assets/images/Payoneer-Card.jpg" alt=""  height="55"><br>Send money to the master card: Payoneer: lihan_chowdhury@yahoo.com</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h4>We Accept :</h4>
        <div class="payment-accepted">
          <img src="assets/images/payment1.png" alt="" width="100" height="50">
          <img src="assets/images/payment3.jpg" alt="" width="100" height="50">
          <img src="assets/images/payment2.jpg" alt="" width="100" height="50">
          <img src="assets/images/payment4.jpg" alt="" width="100" height="50">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Contact-us--> 

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top" class="js-scroll-trigger-nav-2"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 


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
<!-- Jquery Easing -->
<script src="assets/js/jquery.easing.js"></script>
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/interface.js"></script> 

</body>

</html>
