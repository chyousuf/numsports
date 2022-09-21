<?php
$response = post_transaction_data('https://www.remoteface.com/mumemail/sendmail.php', $_POST);

print_r($response);
exit;

function post_transaction_data($url, $requestData) {

    $postUrl = $url;
	
	//$requestData = json_encode($requestData);

    //Get length of post
    $postlength = strlen($requestData);

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $postUrl);
    curl_setopt($ch, CURLOPT_POST, $postlength);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    //close connection
    curl_close($ch);

    return $response;
}
?>