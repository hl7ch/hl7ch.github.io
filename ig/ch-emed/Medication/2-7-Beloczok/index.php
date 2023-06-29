<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/3.0.0/Medication-2-7-Beloczok.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/3.0.0/Medication-2-7-Beloczok.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/3.0.0/Medication-2-7-Beloczok.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/3.0.0/Medication-2-7-Beloczok.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/3.0.0/Medication-2-7-Beloczok.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/3.0.0/Medication-2-7-Beloczok.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed/3.0.0/Medication-2-7-Beloczok.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
