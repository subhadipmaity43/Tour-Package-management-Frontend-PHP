<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | Tours</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<?php /*?><script src="js/forms.js"></script><?php */?>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>


<body>
<div id="wrapper" class="inner_page contact_page"><!--Wrapper Start--> 
 
<?php include("elements/header.php");?>


  <!--Page Title Section Satrt-->
  <div class="main">
  <div class="content">
    <div class="container_12">
      
      <div class="grid_12">
        <h3>Booking Status :</h3>
        <form id="form" action="" method="post">
          <div class="success_wrapper">
            <div class="success">Booking Status :<br>
              </div>
          </div>
          <form>
            <span class="center">
            <br><br><br>
            
                    <h3>Thank you,</h3>
                    
                    <h3>Your booking submitted. Admin will contact you soon.</h3>
           </span>
           </br> </br> </br> </br> </br>
           </form>
           </div>
        <div class="clear"></div>
    </div>
  </div>
  <div class="bottom_block">
    <div class="container_12">
      <div class="grid_2 prefix_2">
        <ul>
          <li><a href="#">FAQS Page</a></li>
          <li><a href="#">People Say</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a href="#">Useful links</a></li>
          <li><a href="#">Partners</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a href="#">Insurance</a></li>
          <li><a href="#">Family Travel</a></li>
        </ul>
      </div>
      <div class="grid_2">
      <h4>Contact Us:</h4>
        TEL: +8250946026<br>
        <a href="#">journey@gmail.com</a> </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php include("elements/footer.php");?>
</body>
</html>