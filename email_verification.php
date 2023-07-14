<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | Email Verification</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.css">
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

<?php 
	include("elements/header.php");
	include('MyMethods.php');
?>

<?php 


	$otp = "";

	if(isset($_POST['Email']))
	{
		$toEmail = $_POST['Email'];

		//Generate 6 digit Random Number For OTP
		$otp = random_int(100000, 999999);

		$_SESSION['otp'] = $otp;
		$_SESSION['data'] = $_POST;

		//Mail to Customer that OTP
		$res = sendOTP($toEmail, $otp);

	}
	
?>



<div class="main">
  <div class="content">
    <div class="container_12">
      
      <div class="grid_6">
        <h3>OTP (One Time Password) sent to your mail for mail verification</h3>
        <form id="form" action="" method="post"> 
          <div class="success_wrapper">
            <div class="success"><br>
              </div>
          </div>
          <fieldset>
        
          
              <input type="number" placeholder="Enter OTP" name="otp" style="width:800px; margin-top:5px; text-align:left;background-color:white">
              <br class="clear">
              <span class="error error-empty">*This is not a valid Email.</span><span class="empty error-empty">*This field is required.</span> </label>
        




             
			  <input type="submit" value="Verify" name="verify" style="width:200px; margin-top:30px; text-align:center;background-color:blue;color:white">
              <div class="none"></div>              
         
          </fieldset>
        </form>

		<?php
			if(isset($_POST['verify']))
			{
				$userotp = 	$_POST['otp'];
		
				if($userotp == $_SESSION['otp'])
				{
					//echo "<script>alert('Matched')</script>";
		
					$data = $_SESSION['data'];
					//$name = $data['name'];
					//echo "<script>alert('.$name.')</script>";
		
					$response =  addUser($data);
		
					if($response == 1)
					{
						echo "<script>alert('Registered Successfully.')</script>";
						header('location:login.php');
					}
					else
						echo "
							<p style='color:red;text-align:center;font-size:25px'>Not Registered</p>
						";
				}
				else{
					echo "<h1 style='color:red;text-align:center;font-size:25px'>OTP Not Matched</h1>";
				}
		
			}
		?>

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"></script>
<?php include("elements/footer.php");?>
</body>
</html>