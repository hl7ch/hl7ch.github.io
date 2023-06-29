<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/StructureDefinition-swissnoso-sequence-number.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/StructureDefinition-swissnoso-sequence-number.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/StructureDefinition-swissnoso-sequence-number.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/StructureDefinition-swissnoso-sequence-number.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/StructureDefinition-swissnoso-sequence-number.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/StructureDefinition-swissnoso-sequence-number.html');
else 
  Redirect('http://fhir.ch/ig/swissnoso/StructureDefinition-swissnoso-sequence-number.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
