<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | login or signup</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.css">

</head>
<body>

<?php include("elements/header.php");?>


<div class="main">
  <div class="content">
    <div class="container_12">
      
      <div class="grid_12">
        <h3>Log In</h3>
        <div id="form" onsubmit="preventDefault()">
          <div class="success_wrapper">
            <div class="success">Log In<br>
              </div>
          </div>
          <fieldset>
           
            
        
              <label class="Email">
              <input type="text" placeholder="Email" Name="Email" id="Email">
              <br class="clear">
              <span class="error error-empty">*This is not a valid Email.</span><span class="empty error-empty">*This field is required.</span> </label>
            
            
            <label class="Password">
              <input type="password" placeholder="Password" Name="Password" id="Password">
              <br class="clear">
              <span class="error error-empty">*This is not a valid no of Password.</span><span class="empty error-empty">*This field is required.</span> </label>
              
            

              <div class="none"></div>


			<input type="submit" onclick="login()" value="Submit" style="width:250px; margin-bottom:30px; text-align:center;">
			<br class="clear">
			<div class="container register">
			<p>Don't have any account? <a href="Register.php">click here.</a>.</p>
             
         
          </fieldset>
        </div>
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

<!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"></script>
<script>
	function login()
	{
		var Email = document.getElementById("Email").value;
		var Password = document.getElementById("Password").value;
		$.ajax({
			type: "POST",
			url: "checkuser.php",
			data: {"Email": Email, "Password":Password},
			success: function(response){
				if(response == "success")
				{
					window.location.href = 'http://localhost/Tour/index.php';
				}
				else{
					Swal.fire("Invalid Email or Password");
				}
				
			}
		});
		return false;
	}
</script>


<?php include("elements/footer.php");?>
</body>
</html>