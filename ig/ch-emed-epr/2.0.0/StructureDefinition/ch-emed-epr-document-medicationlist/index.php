<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-document-medicationlist.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-document-medicationlist.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-document-medicationlist.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-document-medicationlist.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-document-medicationlist.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-document-medicationlist.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed-epr/2.0.0/StructureDefinition-ch-emed-epr-document-medicationlist.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
