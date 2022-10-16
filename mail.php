<?php
if(isset($_post['submit'])){
	$fullName = $_POST['FullName'];
	$email = $_POST['Email'];
	$address = $_POST['Address'];
	$phone = $_POST['Phone'];
	$gender = $_POST['Gender'];
	$weight = $_POST['Weight'];
	$height = $_POST['Height'];

	$mailTo ='rbgarg4881@gmail.com';

	$subject = 'A new mail received from ' .$fullName
	$htmlContent = '<h2> Request Received </h2>
	<p><b>Client Name: </b> ' .$fullName . '</p>
	<p><b>Email Address: </b> ' .$email . '</p>
	<p><b>Phone Number: </b> ' .$phone . '</p>
	<p><b>Client Gender: </b> ' .$gender . '</p>
	<p><b>Weight(kg): </b> ' .$weight . '</p>
	<p><b>Height(inch): </b> ' .$height . '</p>';

	$headers ="From:" .$fullName . "<". $email . ">";
	$headers ="MIME-Version: 1.0\r\n";
	$headers = "Content-Type: text/html; charset=UTF-8\r\n";

	$result = mail($mailTo, $subject, $htmlContent, $header);

	if($result) {
	$success = "The message was sent successfully";
	}else {
	$failed = "Error: Message was not senr, try again later";
	}

}
?>