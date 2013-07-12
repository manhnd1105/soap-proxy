<?php
$client = new SoapClient("http://ideone.com/api/1/service.wsdl");
$sourceCode = $_POST['source'];
$language = $_POST['lang'];
$input = null;
$createPaste = $client->createSubmission('manhnd','123456',$sourceCode,$language,$input,true,true);
sleep(2);
$pasteLink = $createPaste['link'];
$detail = $client->getSubmissionDetails('manhnd','123456',$pasteLink,true,true,true,true,true);
echo $detail['output'];
return "OK";
?>
