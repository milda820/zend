<?php

use Zend\Http\Client;
include 'vendor/autoload.php';

$client = new Client('http://www.skalnicky-plzen.cz/', array(
    'maxredirects' => 0,
    'timeout'      => 30
));
$response = $client->send();




//echo secti(5,10);

//var_dump($response->getBody());

$text_v_utf8 = iconv('utf-8','cp852',$response->getContent()); 

echo $text_v_utf8;


?>
