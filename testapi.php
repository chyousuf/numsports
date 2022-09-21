<?php
/*$url = "https://www.remoteface.com/mumemail/contact-us-form.php?id=456";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);
print_r($result);*/

$data_string = array(
				"first_name" => "First name",
				"last_name" => "last name",
				"email"=>"email@gmail.com"
			);

print_r(post_transaction_data('https://www.remoteface.com/mumemail/contact-us-form.php', $data_string)); exit();


function post_transaction_data($url, $requestData) {

    $postUrl = $url;

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