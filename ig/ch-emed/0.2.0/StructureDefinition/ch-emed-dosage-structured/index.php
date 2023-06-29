<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/StructureDefinition-ch-emed-dosage-structured.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/StructureDefinition-ch-emed-dosage-structured.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/StructureDefinition-ch-emed-dosage-structured.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/StructureDefinition-ch-emed-dosage-structured.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/StructureDefinition-ch-emed-dosage-structured.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/StructureDefinition-ch-emed-dosage-structured.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed/StructureDefinition-ch-emed-dosage-structured.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
