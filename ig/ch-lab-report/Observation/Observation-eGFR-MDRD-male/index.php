<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Observation-Observation-eGFR-MDRD-male.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Observation-Observation-eGFR-MDRD-male.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Observation-Observation-eGFR-MDRD-male.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Observation-Observation-eGFR-MDRD-male.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Observation-Observation-eGFR-MDRD-male.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Observation-Observation-eGFR-MDRD-male.html');
else 
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Observation-Observation-eGFR-MDRD-male.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
