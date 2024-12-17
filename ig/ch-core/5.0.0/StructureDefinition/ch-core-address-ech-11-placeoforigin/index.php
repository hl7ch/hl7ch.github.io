<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0/StructureDefinition-ch-core-address-ech-11-placeoforigin.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0/StructureDefinition-ch-core-address-ech-11-placeoforigin.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0/StructureDefinition-ch-core-address-ech-11-placeoforigin.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0/StructureDefinition-ch-core-address-ech-11-placeoforigin.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0/StructureDefinition-ch-core-address-ech-11-placeoforigin.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0/StructureDefinition-ch-core-address-ech-11-placeoforigin.html');
else 
  Redirect('http://fhir.ch/ig/ch-core/5.0.0/StructureDefinition-ch-core-address-ech-11-placeoforigin.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
