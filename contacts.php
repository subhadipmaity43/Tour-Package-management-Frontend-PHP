
<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<script src="js/forms.js"></script>
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
<div id="wrapper" class="inner_page contacts_page"><!--Wrapper Start--> 


<?php include("elements/header.php");



    
if(isset($_POST['name']))
{

    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

      $sql = "insert into contact (name,email,message) values ('$name','$email','$message')";

    include('dbcon.php');

    mysqli_query($con,$sql);
    header("location:contacts.php");

    exit;



}



?>

<div class="main">
  <div class="content">
    <div class="container_12">
      <div class="grid_9">
        <h3>Stay in Touch</h3>
        <div class="map">
          <figure class="img_inner fleft">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14751.546179875293!2d88.41130235!3d22.4332957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1618153304687!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>          </figure>
          <address>
          <dl>
          <br>
            <dt> Sonarpur Station Road, Sonarpur<br>
              Kolkata - 700150. </dt>
            <dd><span>TOLL FREE:</span>+8250946026</dd>
            <dd>E-mail: <a href="#" class="link-1">journey@gmail.com</a></dd>
          </dl>
          </address>
          
        </div>
      </div>
      <div class="grid_3">
        <h3>Contact Us</h3>
        <form id="form" action="#">
          <div class="success_wrapper">
            <div class="success">Contact form submitted!<br>
              <strong>We will be in touch soon.</strong> </div>
          </div>
          <fieldset>
            <label class="name">
              <input type="text" placeholder="Name" name="name">
              <br class="clear">
              <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>

            <label class="email">
              <input type="text" placeholder="Email"name="Email">
              <br class="clear">
              <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>

          
            <label class="message">
              <textarea>Message</textarea>
              <br class="clear">
              <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
            
            <div class="btns"><a data-type="reset" class="btn">Clear</a>
              <div class="none"></div>


              <a data-type="submit" class="btn">Submit</a>
              <div class="clear"></div>
            </div>
             
             
           
          </fieldset>
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