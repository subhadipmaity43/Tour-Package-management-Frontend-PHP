
           <?php 
           
                    if(isset($_POST['username']))
                    {
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                           

                           require("dbcon.php");

                            $sql = "select * from admin where username='$username' and password='$password' ";

                            $res = mysqli_query($con,$sql);

                            $num = mysqli_num_rows($res);

                            if($num>0)
                            {
                                echo "Login successfully!!";

                                $arr = mysqli_fetch_assoc($res);

                                session_start();
                                $_SESSION['user_info']=$arr;


                                //echo "<pre/>";
                                //print_r($_SESSION);

                                //exit;

                                header("location:allpackages.php");
                            }
                            else
                            {
                                echo "Wrong Username or password!!";
                            }

                            

                    }
           
           ?>




<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Dastyle - Admin & Dashboard Template</title>
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
      <meta content="" name="author">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- App favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <!-- App css -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/app-rtl.min.css" rel="stylesheet" type="text/css">
   </head>
   <body class="account-body accountbg">
      <!-- Log In page -->
      <div class="container">
      
         <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
               <div class="row">
                  <div class="col-lg-5 mx-auto">
                     <div class="card">
                        <div class="card-body p-0 auth-header-box">
                           <div class="text-center p-3">
                         
                              <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo"></a>
                              <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Admin Login</h4>
                             
                           </div>
                        </div>
                        
                        <div class="card-body">
                        

                      
                        
                        <ul class="nav-border nav nav-pills" role="tablist" >
                       
                        

                              <li class="nav-item">
                            
                               

                      
                              <a class="nav-link active font-weight-semibold " data-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a></li>
                             
                              
                           </ul>
                           <!-- Tab panes -->
                           <div class="tab-content">
                              <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                 <form class="form-horizontal auth-form my-4" method="post" >
                                    <div class="form-group">
                                       <label for="username">Username</label>
                                       <div class="input-group mb-3">
                                           <input type="text" class="form-control"  name="username" placeholder="Enter Username"></div>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                       <label for="userpassword">Password</label>
                                       <div class="input-group mb-3">
                                           <input type="password" class="form-control" name="password" id="userpassword"  placeholder="Enter Password"></div>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group row mt-4">
                                       <div class="col-sm-6">
                                          <div class="custom-control custom-switch switch-success"><input type="checkbox" class="custom-control-input" id="customSwitchSuccess"> <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label></div>
                                       </div>
                                       <!--end col-->
                                      --
                                       <!--end col-->
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group mb-0 row">
                                       <div class="col-12 mt-2"><button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button></div>
                                       <!--end col-->
                                    </div>
                                    <!--end form-group-->
                                 </form>
                                
                                 
                                 
                              </div>
                              
                           </div>
                        </div>
                        <!--end card-body-->
                        
                     </div>
                     <!--end card-->
                  </div>
                  <!--end col-->
               </div>
               <!--end row-->
            </div>
            <!--end col-->
         </div>
         <!--end row-->
      </div>
      <!--end container--><!-- End Log In page --><!-- jQuery  --><script src="assets/js/jquery.min.js"></script><script src="assets/js/bootstrap.bundle.min.js"></script><script src="assets/js/waves.js"></script><script src="assets/js/feather.min.js"></script><script src="assets/js/simplebar.min.js"></script>
   </body>
</html>


           
