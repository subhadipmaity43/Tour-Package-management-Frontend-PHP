<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | Tours</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">

<style>
	th, td{
		text-align:left;
		font-size: 15px;
	}
</style>

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

<div id="wrapper" class="inner_page contacts_page"><!--Wrapper Start--> 
  
<?php include("elements/header.php");
    

    if(!isset($_SESSION['user']) || empty($_SESSION['user']))
    {
      header("location:login.php");
    }

  
	if(isset($_POST['firstname']))
	{

		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$bookingdate=$_POST['bookingdate'];
		$totalperson=$_POST['totalperson'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$status=$_POST['status'];

		$sql = "insert into booking (firstname,lastname,bookingdate,totalperson,phone,email,status) values ('$firstname','$lastname','$bookingdate','$totalperson','$phone',' $email','$status')";

		include('dbcon.php');

		mysqli_query($con,$sql);
		header("location:thankyou.php");

		exit;

	}

	if(isset($_GET['package_id']))
	{
		$package_id = $_GET['package_id'];
		$sql = "select *from package where id = ".$package_id;
		include('dbcon.php');
		$res = mysqli_query($con, $sql);

		$row = mysqli_fetch_assoc($res);
	}

?>

<div class="main">
  <div class="content">
    <div class="container_12">

		<div class="grid_12">
			<h3>Package Details</h3>

			<table>
				<tr>
					<th>Package</th>
					<td>
						<?php
						    $package = "";
							if($row['package'] == 1)
							{
								$package = "India Tour Pacakage";
							}
							else if($row['package'] == 2)
							{
								$package = "India Special Pacakage";
							}
							else if($row['package'] == 3)
							{
								$package = "International Tour Pacakage";
							}
							else if($row['package'] == 4)
							{
								$package = "International Special Pacakage";
							}
							else if($row['package'] == 5)
							{
								$package = "Short Break Pacakage";
							}
							echo "<h1>".$package."</h1>";
						?>
					</td>
					<td rowspan="4">
						<img src="photo/<?php echo $row["photo"]?>" alt="" width="50%">
					</td>
				</tr>
				<tr>
					<th>Name</th>
					<td>: <?php echo $row['name']; ?></td>
				</tr>
				<tr>
					<th>Price</th>
					<td>: <?php echo $row['price']; ?> (For Single Person)</td>
				</tr>
				<tr>
					<th>Description</th>
					<td>: <?php echo $row['description']; ?></td>
				</tr>
			</table>
		</div>
      
	  <input type="hidden" name="package" id="package" value="<?php echo $package; ?>">
	  <input type="hidden" name="name" id="name" value="<?php echo $row['name']; ?>">
	  <input type="hidden" name="amount" id="amount" value="<?php echo $row['price']; ?>">

      <div class="grid_6">
        <h3>Booking Details</h3>
        <div id="form">
          <div class="success_wrapper">
            <div class="success">Booking Details<br>
              </div>
          </div>
          <fieldset>
           
          <label class="First Name">
              <input type="text" placeholder="First Name" name="fname" id="fname">
              <br class="clear">
              <span class="error error-empty">*This is not a valid First Name.</span><span class="empty error-empty">*This field is required.</span> </label>
              
        
              <label class="Last Name">
              <input type="text" placeholder="Last Name" name="lname" id="lname">
              <br class="clear">
              <span class="error error-empty">*This is not a valid Last Name.</span><span class="empty error-empty">*This field is required.</span> </label>
        
          <label class="Booking Date">
          <input type="date" placeholder="Booking Date" name="booking_date" id="booking_date">
              <br class="clear">
              <span class="error error-empty">*This is not a valid booking date.</span><span class="empty error-empty">*This field is required.</span> </label>
            
            
            <label class="Total Person">
              <input type="numbrer" placeholder="Total Person" name="total_person" id="total_person">
              <br class="clear">
              <span class="error error-empty">*This is not a valid no of persson.</span><span class="empty error-empty">*This field is required.</span> </label>
              
              <label class="Phone Number">
              <input type="number" placeholder="Phone number" name="phoneno" id="phoneno">
              <br class="clear">
              <span class="error error-empty">*This is not a valid Phone number.</span><span class="empty error-empty">*This field is required.</span> </label>

              <label class="Email Id">
              <input type="text" placeholder="Email Id" name="emailid" id="emailid">
              <br class="clear">
              <span class="error error-empty">*This is not a valid Email.</span><span class="empty error-empty">*This field is required.</span> </label>


              <div class="none"></div>

              
              <button type="submit" onclick="paynow()" value="Pay Now" style="width:250px; margin-bottom:30px; text-align:center;">Pay Now</button>
              
              <br class="clear">

              
             
              </div>
              <br class="clear">
             
          </fieldset>
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


<script>
	function paynow()
	{
		//alert("Hii");
		var fname = document.getElementById("fname").value;
		var lname = document.getElementById("lname").value;
		var booking_date = document.getElementById("booking_date").value;
		var total_person = document.getElementById("total_person").value;
		var phoneno = document.getElementById("phoneno").value;
		var emailid = document.getElementById("emailid").value;
		var package = document.getElementById("package").value;		
		var name = document.getElementById("name").value;
		var amount = document.getElementById("amount").value;

		amount = amount * total_person;

		// alert(fname + " "+ lname + " " + booking_date);
		// alert(total_person + " "+ phoneno + " " + emailid);
		// alert(package + " "+ name + " " + amount);

		$.ajax({
				type: "POST",
				url: "pay.php",
				data: {"fname": fname, "lname": lname, "booking_date": booking_date, "total_person": total_person, "phoneno": phoneno, "emailid": emailid, "package":package, "name": name, "amount": amount},
				success: function(response){
					//alert(response);
					var options = {
								"key": "rzp_test_GcFJXsaEMT5UYO", // Enter the Key ID generated from the Dashboard
								"amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
								"currency": "INR",
								"name": package,
								"description": name,
								"image": "logo.png",
								//"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
								"handler": function (response){
									// alert(response.razorpay_payment_id);
									// alert(response.razorpay_order_id);
									// alert(response.razorpay_signature)
									//Sent data to the database & redirent to the thank you page
									//ajax call
									$.ajax({
										type: "POST",
										url: "pay.php",
										data: {"transactionid": response.razorpay_payment_id},
										success: function(response){
											//alert(response);
											window.location.href = "thankyou.php";
									}
							});

								}
							};	
							var rzp1 = new Razorpay(options);
							rzp1.open();
							
						}
					
			});
	}
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
<?php include("elements/footer.php");?>
</body>
</html>