<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-address-ech-11-placeofbirth.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-address-ech-11-placeofbirth.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-address-ech-11-placeofbirth.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-address-ech-11-placeofbirth.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-address-ech-11-placeofbirth.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-address-ech-11-placeofbirth.html');
else 
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-address-ech-11-placeofbirth.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
