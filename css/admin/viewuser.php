<?php 
   require("dbcon.php");

      $id=$_GET['id'];
      $sql = "select * from user where id='$id'";
      $res = mysqli_query($con,$sql);

      $row= mysqli_fetch_assoc($res);


      if(isset($_POST['firstname']))
      {
      
          $fname=$_POST['firstname'];
          $lname=$_POST['lastname'];
          $email=$_POST['email'];
          $password=$_POST['password'];
          $phone=$_POST['phone'];
          $address=$_POST['address'];
          $eidtid = $_POST['editid'];

      
            $sql = "update user set firstname='$firstname',lastname='$lastname',email='$email',password='$password',phone='$phone',address='$address' where id='$eidtid' ";
  
                              mysqli_query($con,$sql);
                            }
                            else
                            {
                              $sql = "update user set firstname='$firstname',lastname='$lastname',email='$email',password='$password',phone='$phone',address='$address' where id='$eidtid' ";

                              mysqli_query($con,$sql);

                            }
                            
                           

                            echo "thank u data saved!!";

                            header("location:alluser.php");

           
           ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>View User</title>
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
                              <h4 class="page-title">View User</h4>
                             
                           </div>
                          
                        </div>
                        <!--end row-->
                     </div>
                     <!--end page-title-box-->
                  </div>
                  <!--end col-->
               </div>
               
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">View User</h4>
                           
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                           <form class="form-parsley" action="" method="post" enctype="multipart/form-data">

                              <input type="hidden" name="viewid" value="<?php echo $row['id']?>" />
                              <div class="form-group"><label>First Name</label>

                              <input type="hidden" name="viewid" value="<?php echo $row['id']?>" />
                              <div class="form-group"><label>Last Name</label>
                              
                               <input type="text" class="form-control" name="name" value="<?php echo  $row['firstname']?>" required placeholder="First Name">
                               <input type="text" class="form-control" name="name" value="<?php echo  $row['Lastname']?>" required placeholder="Last Name">

                               </div>


                               <div class="form-group"><label>Email</label>
                              
                               <input type="text" class="form-control" name="price" value="<?php echo  $row['Email']?>" required placeholder="Email">
                               
                               </div>
                              <!--end form-group-->
                              
                              <div class="form-group"><label>Phone</label> 

                                 <div><input type="text" name="description" value="<?php echo  $row['Phone']?>" class="form-control" required  placeholder=" Phone " /></div>
                              </div>


                              <div class="form-group"><label>Password</label> 

                                 <div><input type="text" name="description" value="<?php echo  $row['Password']?>" class="form-control" required  placeholder=" Password " /></div>
                                 </div>


                              <div class="form-group"><label>Address</label> 

                                 <div><input type="text" name="description" value="<?php echo  $row['Address']?>" class="form-control" required  placeholder=" Address " /></div>
                              </div>

                             
                              
                              <!--end form-group-->
                              <div class="form-group mb-0"><button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> <button type="reset" class="btn btn-danger waves-effect">Cancel</button></div>
                              <!--end form-group-->
                           </form>
                           <!--end form-->
                        </div>
                        <!--end card-body-->
                     </div>
                     <!--end card-->
                  </div>
                 
               </div>
               <!-- end row -->
            </div>
            <!-- container -->
            <?php include("footer.php");?>
         </div>
         <!-- end page content -->
      </div>
      <!-- end page-wrapper --><!-- jQuery  --><script src="assets/js/jquery.min.js"></script><script src="assets/js/bootstrap.bundle.min.js"></script><script src="assets/js/metismenu.min.js"></script><script src="assets/js/waves.js"></script><script src="assets/js/feather.min.js"></script><script src="assets/js/simplebar.min.js"></script><script src="assets/js/jquery-ui.min.js"></script><script src="assets/js/moment.js"></script><script src="../plugins/daterangepicker/daterangepicker.js"></script><!-- Parsley js --><script src="../plugins/parsleyjs/parsley.min.js"></script><script src="assets/pages/jquery.validation.init.js"></script><!-- App js --><script src="assets/js/jquery.core.js"></script><script src="assets/js/app.js"></script>
   </body>
</html>