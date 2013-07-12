<?php
$client = new SoapClient("http://ideone.com/api/1/service.wsdl");
$sourceCode = $_POST['sourceCode'];
$language = 29;
$input = null;
$createPaste = $client->createSubmission('manhnd','123456',$sourceCode,$language,$input,true,true);
//wait(2);
$pasteLink = $createPaste['link'];
$detail = $client->getSubmissionDetails('manhnd','123456',$pasteLink,true,true,true,true,true);
return $detail['output'];
?>
