<? 
header('content-type: application/json; charset=utf-8');

if (isset($_GET["firstname"])) {
	$firstname = strip_tags($_GET['firstname']);
	$surname = strip_tags($_GET['surname']);
	$email = strip_tags($_GET['email']);
	$mobilephone = strip_tags($_GET['mobilephone']);
	$state = strip_tags($_GET['state']);
	$message = strip_tags($_GET['message']);
	$header = "MIME-Version: 1.0\r\n"; 
	$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$header .= "From: ". $firstname . " <" . $email . ">rn"; 

	$ip = $_SERVER['REMOTE_ADDR']; 
	$httpref = $_SERVER['HTTP_REFERER']; 
	$httpagent = $_SERVER['HTTP_USER_AGENT']; 
	$today = date("F j, Y, g:i a");    
	
	$recipient = 'eddie.d.2000@gmail.com';
	$subject = 'Contact Form';
	$mailbody = "
First Name: $firstname<br>
Last Name: $surname<br>
Email: $email<br>
Phone: $mobilephone<br>
State: $state<br>
Message: $message<br>

IP: $ip<br>
Browser info: $httpagent<br>
Referral: $httpref<br>
Sent: $today
";
	$result = 'success';

	if (mail($recipient, $subject, $mailbody, $header)) {
		echo json_encode($result);
	}
}
?>