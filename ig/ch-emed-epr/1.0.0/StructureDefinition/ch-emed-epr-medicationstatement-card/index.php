<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medicationstatement-card.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medicationstatement-card.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medicationstatement-card.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medicationstatement-card.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medicationstatement-card.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medicationstatement-card.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed-epr/1.0.0/StructureDefinition-ch-emed-epr-medicationstatement-card.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
