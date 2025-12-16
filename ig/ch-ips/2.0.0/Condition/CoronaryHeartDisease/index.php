<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Condition-CoronaryHeartDisease.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Condition-CoronaryHeartDisease.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Condition-CoronaryHeartDisease.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Condition-CoronaryHeartDisease.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Condition-CoronaryHeartDisease.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Condition-CoronaryHeartDisease.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Condition-CoronaryHeartDisease.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
