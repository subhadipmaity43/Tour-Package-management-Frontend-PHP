
<?php 
 require("dbcon.php");

      if(isset($_GET['id']))
      {
         if( $_GET['isblock']==1)
         {
               $sql="update user set status='0' where id='".$_GET['id']."'";
               mysqli_query($con,$sql);
   
               header("location:alluser.php");
   
   
         }
         else
         {

            $sql="update user set status='1' where id='".$_GET['id']."'";
               mysqli_query($con,$sql);
   
               header("location:alluser.php");
         }
      }

     

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Show All Article</title>
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
      <meta content="" name="author">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- App favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <!-- App css -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
      <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
      <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">
      <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
   </head>
   <body class="dark-sidenav">
      
        <?php include("menu.php");?>



      <div class="page-wrapper">
         
         
      <?php include("header.php");?>
         
         <!-- Page Content-->
         <div class="page-content">
            <div class="container-fluid">
               <!-- Page-Title -->
               <div class="row">
                  <div class="col-sm-12">
                     <div class="page-title-box">
                        <div class="row">
                           <div class="col">
                              <h4 class="page-title">Users Tables</h4>
                              
 <?php 

   

    $condition= " where 1 ";

    if(isset($_POST['search']))
    {
            $ser = $_POST['search'];

            $condition .= "and (fname LIKE '%$ser%' OR lname LIKE '%$ser%' OR email LIKE '%$ser%' OR phone LIKE '%$ser%  OR password LIKE '%$ser%'OR address LIKE '%$ser%') ";


    }


    //$userid=$_SESSION['user_info']['id'];
    $sql = "select * from user ".$condition;

    
    $res = mysqli_query($con,$sql);

?>


                           </div>
                          
                        </div>
                        <!--end row-->
                     </div>
                     <!--end page-title-box-->
                  </div>
                  <!--end col-->
               </div>
               <!--end row--><!-- end page title end breadcrumb -->
               <div class="row">
                  
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">User Details </h4>
                           
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-bordered mb-0 table-centered">
                                 <thead>
                                    <tr>
                                       <th>First Name</th>
                                       <th>Last Name</th>
                                       <th>Email</th>
                                       <th>Phone</th>
                                       <th>Password</th>
                                       <th>Address</th>
                                       <th>Status</th>
                                       
                                      
                                    </tr>
                                 </thead>
                                 <tbody>
                                    

                                    <?php while($row=mysqli_fetch_assoc($res)) 
                    {   
            ?> 
                                    
                                    <tr>
                                    <td><?php echo $row['firstname']?></td>
                                    <td><?php echo $row['lastname']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['phone']?></td>
                                    <td><?php echo $row['password']?></td>
                                    <td><?php echo $row['address']?></td>

                                    <td>
                                    
                                    <?php  if($row['status']=='1'){?>
                                       <a href="alluser.php?id=<?php echo  $row['id']?>&isblock=1">Unblock</a>


                                    <?php } else{?>

                                       <a href="alluser.php?id=<?php echo  $row['id']?>&isblock=0">Block</a>

                                    <?php } ?>
                                    
                                    
                                    </td>
                           


                    <?php } ?>
                                    
                                 </tbody>
                              </table>
                              <!--end /table-->
                           </div>
                           <!--end /tableresponsive-->
                        </div>
                        <!--end card-body-->
                     </div>
                     <!--end card-->
                  </div>
                  <!-- end col -->
               </div>
              
            </div>
            <!-- container -->
            

                <?php include("footer.php")?>

            <!--end footer-->
         </div>
         <!-- end page content -->
      </div>
      <!-- end page-wrapper --><!-- jQuery  --><script src="assets/js/jquery.min.js"></script><script src="assets/js/bootstrap.bundle.min.js"></script><script src="assets/js/metismenu.min.js"></script><script src="assets/js/waves.js"></script><script src="assets/js/feather.min.js"></script><script src="assets/js/simplebar.min.js"></script><script src="assets/js/jquery-ui.min.js"></script><script src="assets/js/moment.js"></script><script src="../plugins/daterangepicker/daterangepicker.js"></script><!-- App js --><script src="assets/js/app.js"></script>
   </body>
</html>