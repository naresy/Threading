<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandy's Threading</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <section class="new_header">
        <div class="new_navigation-bar">
            <div class="new-company-col">
                <h5><a href="index.php"> <!--<span class="fa fa-line-chart" aria-hidden="true"></span> -->
            <img src="includes/images/logo.jpg" class="new_logo" />

            </a></h5>
            </div>
            <div class="link-col">
                <ul>
                <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    
                     
                     <?php if (strlen($_SESSION['bpmsuid']==0)) {?>
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                    </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                     <li class="nav-item">
                        <li><a class="cta-button" href="book-appointment.php">Book Now</a></li>
                    </li>
                    <!-- <li class="nav-item">
                         <a class="nav-link" href="reward.php">Rewards</a></a>
                    </li> -->
                <?php }?>
                    <?php if (strlen($_SESSION['bpmsuid']>0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="book-appointment.php">Book Salon</a>
                    </li>
                    <!-- <li class="nav-item">
                         <a class="nav-link" href="reward.php">Rewards</a></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="booking-history.php">Booking History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="invoice-history.php">Invoice History</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="change-password.php">Setting</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  <?php }?>
                  
               
                </ul>
            </div>
            <div class="link-col-mobile">
                <div class="menu-button">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
</section>
<!-- Mobile Overlay -->
<section class="mobile-overlay">
    <div class="mobile-menu">
        <div class="close-button"><p>X</p></div>
        <ul>
       <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <?php if (strlen($_SESSION['bpmsuid']==0)) {?>
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                    </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                     <li class="nav-item">
                        <li><a class="cta-button" href="book-appointment.php">Book Now</a></li>
                    </li>
                    <!-- <li class="nav-item">
                         <a class="nav-link" href="reward.php">Rewards</a></a>
                    </li> -->
                <?php }?>
                    <?php if (strlen($_SESSION['bpmsuid']>0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="book-appointment.php">Book Salon</a>
                    </li>
                    <!-- <li class="nav-item">
                         <a class="nav-link" href="reward.php">Rewards</a></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="booking-history.php">Booking History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="invoice-history.php">Invoice History</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="change-password.php">Setting</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  <?php }?>
                  
               
            
        </ul>
    </div>
</section>
    <script src="header.js"></script>
</body>
</html>