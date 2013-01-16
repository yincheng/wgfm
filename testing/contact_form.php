<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="refresh" content="5;url=/index.html">
	<title>Thank You For Your Interest</title>
</head>
<body>
<?

$reason = "";
if ($_POST['reason_membership']=="true"){
	$reason .= "membership;";
}
if ($_POST['reason_coaching']=="true"){
	$reason .= "personal coaching;";
}
if ($_POST['reason_corporate']=="true"){
	$reason .= "corporate membership;";
}
if ($_POST['reason_evaluation']=="true"){
	$reason .= "fitness evaluation;";
}
if ($_POST['reason_other']=="true"){
	$reason .= "other;";
}
if ($_POST['reason_product']=="true"){
	$reason .= "fitness product;";
}

$reason = strtoupper($reason);

$to = "info@worldgymfortmcmurray.com";
$subject = "[Customer Inquiry]".$reason;
$body = "Hi,\n\nPlease contact the following customer for his/her interest in World Gym.\n\n";
$body .= "Customer: ".$_POST['name']."\n";
$body .= "Email: ".$_POST['email']."\n";
$body .= "Contact Number: ".$_POST['number']."\n";
$body .= "Interested In: ".$reason."\n";

if ($_POST['land_from'] == "index"){
	if (mail($to, $subject, $body,"From: ".$_POST['name']." <".$_POST['email'].">\n")) {
	   echo("<p>Thank you for your interest! One of our staff will be in touch with you soon.</p>");
	} else {
	   echo("<p>Sorry, An Error Occurred While Sending This Message. Please Try Again.</p>");
	}
}else{
	echo("<p>Sorry, An Error Occurred While Sending This Message. Please Try Again.</p>");
}
echo("<p>You will be redirected back to main page in 5 seconds...</p>");
?>
</body>
</html>
