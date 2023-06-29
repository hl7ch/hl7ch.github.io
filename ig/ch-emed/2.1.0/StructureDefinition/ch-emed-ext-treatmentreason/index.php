<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/StructureDefinition-ch-emed-ext-treatmentreason.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/StructureDefinition-ch-emed-ext-treatmentreason.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/StructureDefinition-ch-emed-ext-treatmentreason.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/StructureDefinition-ch-emed-ext-treatmentreason.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/StructureDefinition-ch-emed-ext-treatmentreason.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/StructureDefinition-ch-emed-ext-treatmentreason.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/StructureDefinition-ch-emed-ext-treatmentreason.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
