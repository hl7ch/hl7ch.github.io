<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-f339e056-53d6-4247-9226-5339123fbd14.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-f339e056-53d6-4247-9226-5339123fbd14.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-f339e056-53d6-4247-9226-5339123fbd14.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-f339e056-53d6-4247-9226-5339123fbd14.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-f339e056-53d6-4247-9226-5339123fbd14.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-f339e056-53d6-4247-9226-5339123fbd14.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-f339e056-53d6-4247-9226-5339123fbd14.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
