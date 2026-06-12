<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/MedicationStatement-UC1-MedicationStatement-Plavix.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/MedicationStatement-UC1-MedicationStatement-Plavix.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/MedicationStatement-UC1-MedicationStatement-Plavix.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/MedicationStatement-UC1-MedicationStatement-Plavix.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/MedicationStatement-UC1-MedicationStatement-Plavix.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/MedicationStatement-UC1-MedicationStatement-Plavix.html');
else 
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/MedicationStatement-UC1-MedicationStatement-Plavix.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
