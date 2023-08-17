
<?php
session_start();
error_reporting(0);
 include('head.php');
include('includes/dbconnection.php');
  ?>
<!doctype html>
<html lang="en">
  <head>
    

    <title>Sandy's Threading| Gallery Page </title>

    <!-- Template CSS -->
   <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
     
    <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="includes/style.css">

    <link rel="icon" href="assets/images/logo1.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    </style>
  </head>
  <body id="home">
<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<!-- breadcrumbs -->

<!-- breadcrumbs //-->

<style>
    .imageview {
  border-radius: 8px;
  border: 2px solid #FFA500;
  margin: 10px;
}
</style>

 <div class="site-section"  data-aos="fade">
    <div class="container">
      
      <div class="row no-gutters" id="lightgallery">
        <?php
          include('dbconnection.php');
         
          
          $data = mysqli_query($con, "SELECT image FROM tblgallery");

          while($row = mysqli_fetch_assoc($data)){
            // echo "<pre>";print_r($row);
        ?>
        
        <div  data-aos="fade" data-src="admin/images/<?php echo $row['image'];?>" >
        <div >
          <a href="#"> <img src="admin/images/<?php echo $row['image'];?>"  height="250" width="250" class="imageview"></a>
        </div> 
        </div>     
      <?php } ?>
      </div>
    </div>
  </div>
   
            </div>
        </div>
    </div>
</section>



<?php include_once('includes/footer.php');?>
<?php include('tail.php');?>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-long-arrow-up"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script src="includes/header.js"></script>

<!-- /move top -->
</body>

</html>