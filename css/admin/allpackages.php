

<?php 
 require("dbcon.php");

      if(isset($_GET['id']))
      {
         if( $_GET['isdelete']==1)
         {
               $sql="delete from package where id='".$_GET['id']."'";
               mysqli_query($con,$sql);
   
               header("location:allpackages.php");
   
   
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
                              <h4 class="page-title">Packages Tables</h4>
                              
 <?php 

    require("dbcon.php");

    $condition= " where 1 ";

    if(isset($_POST['search']))
    {
            $ser = $_POST['search'];

            $condition .= "and (name LIKE '%$ser%' OR description LIKE '%$ser%' OR price like '%$ser%') ";


    }


    //$userid=$_SESSION['user_info']['id'];
     $sql = "select * from package ".$condition;

    
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

                        <a href="addpackage.php">Add Package</a>
                         
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-bordered mb-0 table-centered">
                                 <thead>
                                    <tr>
                                       <th>Name </th>
                                       <th>Description </th>
                                       <th>Photo</th>
                                       <th>Price</th>
                                      
                                       
                                       <th class="text-left">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    

                                    <?php while($row=mysqli_fetch_assoc($res)) 
                    {   
            ?> 
                                    
                                    <tr>
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['description']?></td>
                                    <td><img src="../photo/<?php echo $row['photo']?>" width="100" /></td>
                                    <td><?php echo $row['price']?></td>
                            <td>
                            
                            <a href="editpackage.php?id=<?php echo $row['id']; ?>">Edit</a> ||

                            <a href="Javascript:void(0)" onclick="deleteS('<?php echo $row['id']; ?>')">Delete</a> 

                           


                            
                            
                            </td>
                                    </tr>


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
  
                     <script>

                        function deleteS(id)
                        {

                           if(confirm("DO you want to delete?"))
                           {
                              window.location.href="allpackages.php?id="+id+"&isdelete=1";
                           }
                        }



                     </script>
  
   </body>
</html>