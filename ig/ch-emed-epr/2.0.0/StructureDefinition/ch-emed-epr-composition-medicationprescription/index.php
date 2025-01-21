<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-composition-medicationprescription.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-composition-medicationprescription.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-composition-medicationprescription.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-composition-medicationprescription.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-composition-medicationprescription.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-composition-medicationprescription.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-composition-medicationprescription.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
