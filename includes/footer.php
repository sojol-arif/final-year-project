<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-3 clearfix" style="width:270px;padding-right:25px">
              <div class="footer-heading-part">
                <h6>About Us</h6>
                <span class="bolded-line"></span>
              </div>
              <ul>

            
              <li><a href="page.php?type=aboutus">About Us</a></li>
                <li><a href="page.php?type=faqs">FAQs</a></li>
                <li><a href="page.php?type=privacy">Privacy</a></li>
              <li><a href="page.php?type=terms">Terms of use</a></li>
                  <li><a href="admin/">Admin Login</a></li>
              </ul>
            </div>
            
            <div class="col-md-3 clearfix" style="width:275px">
              <div class="contact-footer">
                  <div class="footer-heading-part">
                    <h6>Contact US</h6>
                    <span class="bolded-line"></span>
                  </div>
                  <ul class="footer-contact-ul">
                    <li><span class="fa fa-map-marker"></span><p>Tejgao, Dhaka, Bangladesh.</p></li>
                    <li><span class="fa fa-phone"></span><p>Phone: +88-0177-262-7949</p></li>
                    <li><span class="fa fa-envelope"></span><p>Email: info@bdcarrentalonline.com</p></li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top:35px;width:270px;margin-left:1px">
             <div class="footer-heading-part">
                <h6>We Accept</h6>
                <span class="bolded-line"></span>
              </div>
            <img src="assets/images/payment.png" alt="payment-img" width="320px" height="50px" style="margin-left:-3px">
          </div>
        </div>
  
        <div class="col-md-3">
          <div class="footer-heading-part">
            <h6>Subscribe Newsletter</h6>
            <span class="bolded-line"></span>
          </div>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input emailSubs" required placeholder="Email@gmail.com" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block emailSubs">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
          </div>
        </div>
         <div class="col-md-3">
            <div class="fb-pageY">
              <div class="footer-heading-part">
                <h6>Facebook</h6>
                <p>Like us</p>
                <span class="bolded-line"></span>
              </div>
                <!--page sdk -->
                <div class="sdk-part wow flipInY" data-wow-duration="1s" data-wow-delay=".2s">
                  <div id="fb-root"></div>
                  <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
                    fjs.parentNode.insertBefore(js, fjs);
                  }(document, 'script', 'facebook-jssdk'));</script>
                  <!-- Facebook page display code -- >
                  <!-- iframe -->
                  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FOnline-car-rental-1864865786924886%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=280px&height=220px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280px" height="220px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="footer-bottom-inner">
        <div class="row">
          <div class="col-md-6 col-md-push-6 text-right">
            <div class="footer_widget">
              <p>Connect with Us:</p>
              <ul>
                <li><a href="https://www.facebook.com/Online-car-rental-1864865786924886/?modal=admin_todo_tour" class="wow zoomIn" data-wow-delay="0"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="wow zoomIn" data-wow-delay=".3s"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="wow zoomIn" data-wow-delay=".6s"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="wow zoomIn" data-wow-delay=".9s"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="wow zoomIn" data-wow-delay="1.2s"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-md-pull-6"> 
            <p class="copy-right">Copyright &copy; All Rights Reserved by OnlineCarRental.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>