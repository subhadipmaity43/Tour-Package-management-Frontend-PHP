<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | Gallery</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/touchTouch.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script>
$(window).load(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
$(function () {
    $('.gallery a.gal').touchTouch();
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>




<?php  include("elements/header.php");



?>

<div class="main">
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h3>Our Gallery</h3>
      </div>
      <div class="clear"></div>
      <div class="gallery">
        <div class="grid_4"> <a href="images/big1.jpg" class="gal img_inner"><img src="images/page3_img1.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big2.jpg" class="gal img_inner"><img src="images/page3_img2.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big3.jpg" class="gal img_inner"><img src="images/page3_img3.jpg" alt=""></a> </div>
        <div class="clear"></div>
        <div class="grid_4"> <a href="images/big4.jpg" class="gal img_inner"><img src="images/page3_img4.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big5.jpg" class="gal img_inner"><img src="images/page3_img5.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big6.jpg" class="gal img_inner"><img src="images/page3_img6.jpg" alt=""></a> </div>
        <div class="clear"></div>
        <div class="grid_4"> <a href="images/big7.jpg" class="gal img_inner"><img src="images/page3_img7.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big8.jpg" class="gal img_inner"><img src="images/page3_img8.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big9.jpg" class="gal img_inner"><img src="images/page3_img9.jpg" alt=""></a> </div>
        <div class="clear"></div>
        <div class="grid_4"> <a href="images/big10.jpg" class="gal img_inner"><img src="images/page3_img10.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big13.jpg" class="gal img_inner"><img src="images/page5_img3.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big12.jpg" class="gal img_inner"><img src="images/page3_img12.jpg" alt=""></a> </div>
       
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