<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medication.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medication.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medication.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medication.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medication.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medication.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medication.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
