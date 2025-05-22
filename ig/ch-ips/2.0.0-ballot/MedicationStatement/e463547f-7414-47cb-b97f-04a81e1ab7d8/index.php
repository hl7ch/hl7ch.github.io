<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
