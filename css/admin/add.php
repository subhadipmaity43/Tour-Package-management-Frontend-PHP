<?php 
           
                    if(isset($_POST['name']))
                    {
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            
                            $photo = $_FILES['photo']['name'];

                            $parr=explode(".",$photo);

                            $ex=end($parr);

                           $pname=  str_replace(" ","_",$name).rand(1,1000).".".$ex; 

                            $tmp = $_FILES['photo']['tmp_name'];

                            $orgi = "pics/$pname";


                            move_uploaded_file($tmp,$orgi);
                           

                           require("dbcon.php");

                            $sql = "insert into students (name,phone,email,photo) values ('$name','$phone','$email','$pname') ";

                            mysqli_query($con,$sql);

                            echo "thank u data saved!!";

                            header("location:showstudent.php");

                    }
           
           ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Add Student</title>
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
                              <h4 class="page-title">Add Student</h4>
                             
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
                           <h4 class="card-title">Add Student</h4>
                           
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                           <form class="form-parsley" action="" method="post" enctype="multipart/form-data">
                              <div class="form-group"><label>Name</label>
                              
                               <input type="text" class="form-control" name="name" required placeholder="Name">
                               
                               </div>


                               <div class="form-group"><label>Phone</label>
                              
                               <input type="text" class="form-control" name="phone" required placeholder="Phone">
                               
                               </div>
                              <!--end form-group-->
                              
                              <div class="form-group">
                                 <label>E-Mail</label>
                                 <div><input type="email" name="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail"></div>
                              </div>


                              <div class="form-group">
                                 <label>Photo</label>
                                 <div><input type="file" name="photo" class="form-control" required accept="image/*" ></div>
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