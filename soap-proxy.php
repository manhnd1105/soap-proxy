<?php

    $soapEndPoint = $_POST['endPoint'];
    $soapRequest = $_POST['request'];
    $header = $_POST['header'];

    $soapAction = curl_init();
    curl_setopt($soapAction, CURLOPT_URL, $soapEndPoint);
    curl_setopt($soapAction, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($soapAction, CURLOPT_TIMEOUT,        10);
    curl_setopt($soapAction, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($soapAction, CURLOPT_HEADER,         false);
    curl_setopt($soapAction, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($soapAction, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($soapAction, CURLOPT_POST,           true );
    curl_setopt($soapAction, CURLOPT_POSTFIELDS,     $soapRequest);
    curl_setopt($soapAction, CURLOPT_HTTPHEADER,     $header);

    $xmlReturn = curl_exec($soapAction);
    print_r($xmlReturn);
    return $xmlReturn;
    curl_close($soapAction);

?>