<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-contactpoint-ech-46-phone.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-contactpoint-ech-46-phone.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-contactpoint-ech-46-phone.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-contactpoint-ech-46-phone.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-contactpoint-ech-46-phone.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-contactpoint-ech-46-phone.html');
else 
  Redirect('http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-contactpoint-ech-46-phone.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
