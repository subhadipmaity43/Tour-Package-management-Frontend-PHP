<!DOCTYPE html>
<html lang="en">
<head>
<title>Message</title>
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

<?php
	
	$user = $_SESSION['user'];

	//echo "Email: ".$user['email'];

	if(isset($_POST['message']))
	{
		$name=$user['firstname'];
		$email=$user['email'];
		$message=$_POST['message'];

		$sql = "insert into contact (name,email,message) values ('$name','$email','$message')";

		include('dbcon.php');

		$res = mysqli_query($con,$sql);

		if($res == 1)
		{
			echo "";
		}
		
	}
?>
       
<div class="main">
  <div class="content">
    <div class="container_12">
      
    <div class="grid_12">
        <h3>Message</h3>
        <form id="form" action="" method="post">
			<div class="success_wrapper">
				<div class="success">Contact form submitted!<br>
				<strong>We will be in touch soon.</strong> </div>
			</div>
    		<fieldset>
				<input type="hidden" placeholder="Name" name="name" value="<?php echo $user['firstname'];?>">
				<input type="hidden" placeholder="Email" name="email" value="<?php echo $user['email'];?>">
            
          
				<label class="message">
					<textarea id="message" name="message" placeholder="Enter Your Message...." required></textarea>
					<br class="clear">
					<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
				<div class="clear"></div>

           		<label class="reply">
                                  
				<div class="clear"></div>
					
					<div class="btns"><button class="btn">Reset</button>
					<div class="none"></div>


					<button class="btn">Submit</button>
					<div class="clear"></div>
				</div>
             
         </fieldset>
          </form>
      </div>
      <div class="clear"></div>
    </div>

	<div class="content">
    	<div class="container_12">
			<div class="grid_12">
				<h1 style='font-size:25px'>All Conversation</h1>
				<hr>
				<?php
					$email=$user['email'];
					//echo "Email: ".$email;
					$sql = "select *from contact where email = '$email' order by id desc";
			
					$con=mysqli_connect("localhost","root","","tourdb");
			
					$res1 = mysqli_query($con,$sql);

					while($row1 = mysqli_fetch_assoc($res1))
					{
						if($row1['reply']!=null)
						{
							echo "<h1 style='font-size:20px'><b>YOU: </b>".$row1['message']."</h1>";
							echo "<h1 style='font-size:20px'><b>ADMIN: </b>".$row1['reply']."</h1>";
							echo "<br>";
						}
						
					}
				?>
			</div>
		</div>
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