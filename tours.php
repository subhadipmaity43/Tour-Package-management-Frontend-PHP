<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | Tours</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
$(function () {
    $(".form1").jqTransform();
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<?php include("elements/header.php");


    include("dbcon.php");

    $sql="select * from package";
    $res=mysqli_query($con,$sql);


?>


<div class="main">
</br></br>
<style>
body {
  font-family:"Times New Roman", Times, serif;
}

.navbar {
  overflow: hidden;
  background-color: #fff;
  
}

.navbar a {
  float: left;
  font-size: 20px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 19px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #00FFFF;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
<div class="navbar">
<div class="dropdown">
<a href="?package=1">
    <button class="dropbtn">India Tour Pacakage  </button>
     </a>
   
    
  </div> 
  <div class="dropdown">
  <a href="?package=2">
    <button class="dropbtn">India Special Pacakage 
      
    </button>
 </a>
  </div> 
  <div class="dropdown">
  <a href="?package=3">
    <button class="dropbtn">International Tour Pacakage 
    </button>
   </a>
  </div> 
  <div class="dropdown">
  <a href="?package=4">
    <button class="dropbtn">International Special Pacakage 
    </button>
    </a>
  </div> 
  <div class="dropdown">
  <a href="?package=5">
    <button class="dropbtn">Short Break Pacakage 
    </button>
    </a>
  </div> 

</div>
  <div class="content">
    <div class="container_12">
    <div class="grid_9">
        <?php
			if(isset($_GET['package']))
			{
				if($_GET['package'] == 1)
				{
					echo '<h3>India Tour Pacakage </h3>';
				}
				else if($_GET['package'] == 2)
				{
					echo '<h3>India Special Pacakage </h3>';
				}
				else if($_GET['package'] == 3)
				{
					echo '<h3>International Tour Pacakage</h3>';
				}
				else if($_GET['package'] == 4)
				{
					echo '<h3>International Special Pacakage </h3>';
				}
				else if($_GET['package'] == 5)
				{
					echo '<h3>Short Break Pacakage</h3>';
				}
			}
			else{
				echo '<h3>Special Tour Packages</h3>';
			}
		?>
        <div class="tours">

        <?php
                while($row=mysqli_fetch_assoc($res))
                {
					if(isset($_GET['package']))
					{
						if($row['package'] == $_GET['package'])
						{
							?>

								<div class="grid_8 alpha" style="height:200px; overflow:hidden;margin-top:20px">
									<div class="tour"> <img src="photo/<?php echo $row["photo"]?>" alt="" width="246" class="img_inner fleft">
									<div class="extra_wrapper">
										<p class="text1" style="font-weight:bold"><?php echo $row["name"]?> </p>
										<p class="price">Price Per Person -  <?php echo $row["price"]?>/-</p>
						
										<p class="text1"><?php echo $row["description"]?> </p>
									
										<a href="booking.php?package_id=<?php echo $row["id"]?>" class="btn">Book Now</a> </div>
									</div>
								</div>
							<?php
						}
					}
					else{
						?>
								<div class="grid_8 alpha" style="height:200px; overflow:hidden;margin-top:20px">
									<div class="tour"> <img src="photo/<?php echo $row["photo"]?>" alt="" width="246" class="img_inner fleft">
									<div class="extra_wrapper">
										<p class="text1" style="font-weight:bold"><?php echo $row["name"]?> </p>
										<p class="price">Price Per Person -  <?php echo $row["price"]?>/-</p>
						
										<p class="text1"><?php echo $row["description"]?> </p>
									
										<a href="booking.php?package_id=<?php echo $row["id"]?>" class="btn">Book Now</a> </div>
									</div>
								</div>
							<?php
					}
				}
        
        	?>         
      
      </div>
      
    </div>
 
 
  </div>
    
      <div class="clear"></div>
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
        TEL: 1-800-234-5678<br>
        <a href="#">info@demolink.org</a> </div>
      <div class="clear"></div>
   
    </div>
  </div>
</div>
<?php include("elements/footer.php");?>
</body>
</html>