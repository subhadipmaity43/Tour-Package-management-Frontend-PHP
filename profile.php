<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Profile</title>
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

<?php include("elements/header.php");?>



<div class="main">
  <div class="content">
    <div class="container_12">
      
      <div class="grid_12">
        <h3>Update Profile</h3>
        <form  id="form" action="" method="post">
          <div class="success_wrapper" >
            <div class="success">Update Profile<br>
              </div>
          </div>
          <fieldset>

            
           
            <label class="First Name">
              <input type="text" placeholder="First Name" name="firstname">
              <br class="clear">
              <span class="error error-empty">*This is not a valid First Name.</span><span class="empty error-empty">*This field is required.</span> </label>
              
        
              <label class="Last Name">
              <input type="text" placeholder="Last Name" name="lastname">
              <br class="clear">
              <span class="error error-empty">*This is not a valid Last Name.</span><span class="empty error-empty">*This field is required.</span> </label>
              
              <label class="Email">
              <input type="text" placeholder="Email" name="email">
              <br class="clear">
              <span class="error error-empty">*This is not a valid Email.</span><span class="empty error-empty">*This field is required.</span> </label>
            
            
              <label class="Password">
              <input type="text" placeholder="Password" name="password">
              <br class="clear">
              <span class="error error-empty">*This is not a valid no of Password.</span><span class="empty error-empty">*This field is required.</span> </label>
              
              <label class="Confirm Password">
              <input type="text" placeholder="Confirm Password" name="Confirm password">
              <br class="clear">
              <span class="error error-empty">*This is not a valid no of Password.</span><span class="empty error-empty">*This field is required.</span> </label>
              <label class="Phone nember">

              <input type="text" placeholder="Phone number" name="phone">
              <br class="clear">
              <span class="error error-empty">*This is not a valid Phone number.</span><span class="empty error-empty">*This field is required.</span> </label>

              <label class="Address">
              <input type="text" placeholder="Address" name="address">
              <br class="clear">
              <span class="error error-empty">*This is not a valid Address.</span><span class="empty error-empty">*This field is required.</span> </label>


   
              <div class="none"></div>
              <input type="submit" value="Save" style="width:250px; margin-bottom:30px; text-align:center;">
              <br class="clear">
              </div>

             
              
              
            
          </fieldset>
        </form>

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