<?php
session_start();
$email_check = '';
$return_json = ''; 
//echo '<pre>'; 
//print_r($_POST);
$post_data = http_build_query(
	array(
		'secret' => '6LeUCXcaAAAAAGf3iTFknJRplrWBy02lbsIukV29',
		'response' => $_POST['recaptcha-response'],
		'remoteip' => $_SERVER['REMOTE_ADDR']
	)
);
$opts = array('http' =>
	array(
		'method'  => 'POST',
		'header'  => 'Content-type: application/x-www-form-urlencoded',
		'content' => $post_data
	),
	"ssl"=>array(
		"verify_peer"=>false,
		"verify_peer_name"=>false,
	)
);
$context  = stream_context_create($opts);
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result = json_decode($response);

  function siteURL()
  {
	  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	  $domainName = $_SERVER['HTTP_HOST'];
	  $pathInfo = pathinfo($_SERVER['PHP_SELF']);
	  return $protocol.$domainName.$pathInfo['dirname'];
  }

  define("PROJECT","MuM Sports");
  define('REQUEST', 'CONTACT US FOR APPOINTMENT');
  define('SITE_PATH', siteURL() );
  $to = 'mumsports20@gmail.com,mumsports1@gmail.com,info@remoteface.com,team@remoteface.com';
  $strFrom = 'info@mumsports.com';
  $subject = PROJECT.', '.REQUEST.' Request';

// if ($result->success) {

	function validateForm($string){
		$pattern  = "/((ftp|http|https):\/\/|www.|seo | seo |\.com|\.net|\.org|\.biz|\.info|\.mobi|\.us|\.cc|\.bz|\.tv|\.edu)/i";
		preg_match_all($pattern, strtolower($string), $matches);
		if($matches[0]){
			 for ($i=0; $i<=count($matches[0]); $i++){
			   if($matches[0][$i] != "")
			   $splbadWords[] = $matches[0][$i];
			  }
			  return $splbadWords;
		 }
	}

// 	foreach($_POST as $key=>$val){
// 	   if($key != "email"){
// 		 if(validateForm($val)){
// 		   $email_check = "You can not submit promotions. Please revise your comments and try again";
// 		   $return_json = '{"email_check":"' . $email_check . '"}';
// 		   echo $return_json;
// 		   exit;
// 		 }
// 	   }
// 	}
	
	ob_start();
	include("sendmail-messagecovid.php");
	$message = ob_get_contents();
	ob_end_clean();

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: <'.$strFrom.'>' . "\r\n";
	$headers .= 'Reply-To: <'.$strFrom.'>' . "\r\n";

	$mail = mail($to, $subject, $message, $headers);

	if($mail){
		$email_check = "OK";
	}else{
		$email_check = "There was an error while submitting your request, please try again.";	
	}		
	
// }else{
// 	$email_check = "Please verify that you are not a robot.";
// }

$return_json = '{"email_check":"' . $email_check . '"}';
	
echo $return_json;	
?>