<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0-ballot/MedicationDispense-MedDispTriatec-WasSubstituted.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0-ballot/MedicationDispense-MedDispTriatec-WasSubstituted.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0-ballot/MedicationDispense-MedDispTriatec-WasSubstituted.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0-ballot/MedicationDispense-MedDispTriatec-WasSubstituted.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0-ballot/MedicationDispense-MedDispTriatec-WasSubstituted.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0-ballot/MedicationDispense-MedDispTriatec-WasSubstituted.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0-ballot/MedicationDispense-MedDispTriatec-WasSubstituted.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
