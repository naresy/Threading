<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if(isset($_POST['sub']))
  {
   
    $email=$_POST['email'];
 
     
    $query=mysqli_query($con, "insert into tblsubscriber(Email) value('$email')");
    if ($query) {
   echo "<script>alert('Your subscribe successfully!.');</script>";
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<div class="footer">
        <!-- footer-->
        <div class="container">
            <div class="footer-block">
                <!-- footer block -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">Threading Address</h4>
                            <ul class="listnone contact">
                                <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <li><i class="fa fa-map-marker"></i> <a href="https://goo.gl/maps/FdZN8g6hcBFzf5VM8" target="_blank"><?php  echo $row['PageDescription'];?> </a></li>
                                <li><i class="fa fa-phone"></i> <a href="tel:(909)712-2101" target="_blank"> <?php  echo $row['MobileNumber'];?></a></li>
                               
                                <li ><i class="fa fa-envelope-o" ></i><a href="mailto:sandythreadingredlands@gmail.com" target="_blank"> <?php  echo $row['Email'];?></a> </li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-social">
                            <!-- social block -->
                            <h4 class="widget-title">Social Feed</h4>
                            <ul class="listnone">
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100083117307338" target="_blank"> <i class="fa fa-facebook"></i> Facebook </a>
                                </li>
                                <li><a href="https://www.instagram.com/sandythreading/?fbclid=IwAR0Fnh5t2pfK_xbKGe9dVRjZZSZE2kvF4OwWRXi8-TjUzyVGMpUNWF2MO88" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                                 <li><a href="https://www.yelp.com/biz/sandy-threading-redlands-2" target="_blank"><i class="fa fa-yelp"></i>Yelp</a></li>
                                
                                <li><a href="https://g.co/kgs/2ERm7e" target="_blank"><i class="fa fa-google-plus"></i> Google Plus</a></li>

                                <li><div class="tiny-footer">
                    <!-- tiny footer block -->
                    <div class="row">

                    </div></li>
                                
                            </ul>
                        </div>

                        <!-- /.social block -->
                    </div>

                   
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="footer-widget widget-newsletter">
                            <!-- newsletter block -->
                            <h4 class="widget-title">Newsletters</h4>
                            <p>Enter your email address to receive new service and offer  information and other useful information right to your inbox.</p>
                            <form method="post">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email address" name="email" required="">
                                
                            <button style=background-color="blue"  type="submit" value="submit" name="sub">Subscribe</button>
                           
                            </div></form>
                            <!-- /input-group -->
                        </div>
                        <!-- newsletter block -->
                    </div>
                </div>
                
                </div>
                <!-- /.tiny footer block -->
            </div>
            <!-- /.footer block -->
        </div>
    </div>

   <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "105980815414898");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v17.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="includes/header.js"></script>



    <!-- Messenger Chat Plugin Code -->
    

    