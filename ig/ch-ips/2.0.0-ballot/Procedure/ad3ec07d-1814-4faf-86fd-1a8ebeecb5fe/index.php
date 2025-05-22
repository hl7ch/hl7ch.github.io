<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Procedure-ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Procedure-ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Procedure-ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Procedure-ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Procedure-ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Procedure-ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Procedure-ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
