<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-ber-identifier.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-ber-identifier.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-ber-identifier.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-ber-identifier.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-ber-identifier.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-ber-identifier.html');
else 
  Redirect('http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-ber-identifier.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
