<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
