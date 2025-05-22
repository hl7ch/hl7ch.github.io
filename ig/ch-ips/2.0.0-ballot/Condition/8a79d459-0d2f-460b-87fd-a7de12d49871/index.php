<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
