<?php
	include('phpmailer/PHPMailerAutoload.php');
    
	function addUser($data)
	{
		$fname=$data['firstname'];
		$lname=$data['lastname'];
		$email=$data['Email'];
		$password=$data['password'];
		$phone=$data['phone'];
		$address=$data['address'];

		$sql = "insert into user (firstname,lastname,email,password,phone,address) values ('$fname','$lname','$email','$password','$phone','$address')";

		include('dbcon.php');

		$res = mysqli_query($con,$sql);

		return $res;
	}

	function sendOTP($toEmail, $otp)
	{
		$mail = new PHPMailer;
		$mail->isSMTP();  //Only enable when use in local server 

		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';

		$mail->Username = 'ourjourney009@gmail.com';
		$mail->Password = 'Journey@123';

		$mail->setFrom('ourjourney009@gmail.com', 'Online journey Service');
		$mail->addAddress($toEmail);
		$mail->addReplyTo('ourjourney009@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'OTP (One Time Password) for Registraion.';
		$mail->Body = '<h1>Your OTP(One Time Password) is : '.$otp.'</h1>';

		if(!$mail->send())
		{
			return 0;
		}
		else{
			return 1;
		}
	}

	function addPayment($data)
	{
		$fname=$data['fname'];
		$lname=$data['lname'];
		$booking_date=$data['booking_date'];
		$total_person=$data['total_person'];
		$phoneno=$data['phoneno'];
		$emailid=$data['emailid'];
		$package=$data['package'];
		$name=$data['name'];
		$amount=$data['amount'];
		$status="Pending";

		$sql = "insert into payment (fname, lname, booking_date, total_person, phoneno, emailid, package, name, amount, status) values ('$fname', '$lname', '$booking_date', '$total_person', '$phoneno', '$emailid', '$package', '$name', '$amount', '$status')";

		include('dbcon.php');

		$res = mysqli_query($con,$sql);

		$_SESSION['paymentid'] = mysqli_insert_id($con);

		return $res;
	}

	function updatePayment($transactionid)
	{
		include('dbcon.php');

		$paymentid = $_SESSION['paymentid'];
		$transactionid = $_POST['transactionid'];


		$sql = "update payment set transactionid = '$transactionid', status = 'Completed' where paymentid = '$paymentid'";

		$res = mysqli_query($con,$sql);

		return $res;
	}


?>