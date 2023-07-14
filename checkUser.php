<?php

if(isset($_POST['Email']))
{
    $email=$_POST['Email'];
    $password=$_POST['Password'];

	//echo $email." ".$password;

    $sql = "select * from user where email='$email' and password='$password'";

    include('dbcon.php');

    $row = mysqli_query($con,$sql);
    $num = mysqli_num_rows($row);

	//echo "Record: ".$num;

   if($num>0)
   {
     $user = mysqli_fetch_assoc($row);
    // print_r($user);
     session_start();
    
     $_SESSION['user'] = $user;
    
	 echo "success";

   }
   else{
	   echo "failed";
   }
   

}
exit;
?>