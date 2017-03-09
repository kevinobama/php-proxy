<?php

$url='https://www.google.co.uk/webhp?hl=en&ictx=2&sa=X&ved=0ahUKEwj48e-YysbSAhXMmZQKHRqCA3IQPQgD#hl=en&q=php+curl+&*';
if(isset($_GET['url'])) {
	$url=$_GET['url'];
}
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    print $result;