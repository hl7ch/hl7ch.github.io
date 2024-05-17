<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationRequest-a90a2282-a79a-4f14-8f10-ce8619472595.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationRequest-a90a2282-a79a-4f14-8f10-ce8619472595.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationRequest-a90a2282-a79a-4f14-8f10-ce8619472595.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationRequest-a90a2282-a79a-4f14-8f10-ce8619472595.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationRequest-a90a2282-a79a-4f14-8f10-ce8619472595.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationRequest-a90a2282-a79a-4f14-8f10-ce8619472595.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationRequest-a90a2282-a79a-4f14-8f10-ce8619472595.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
