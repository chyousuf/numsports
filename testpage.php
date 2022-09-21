<?php
exit();

try{

$_POST['name'] = 'test user';
$_POST['email'] = 'kay@espis.com';
$_POST['phone'] = ' (510) 666-6813';
$_POST['model'] = 'HP';
$_POST['make'] = 'Test';
$_POST['year'] = '2022';
$_POST['msg'] = 'this is testing...';
$_POST['service'] = array('Ceramic Pro', 'Paint Protection Film');
$_POST['hear_aboutus'] = array('Google (Search Platform)', 'YouTube / Videos');

$postUrl = $url;
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

echo "<pre>";    
print_r($response);
    
}catch( Exception $e ){
	exit( $e->getMessage() );
}

?>