<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/index.html/StructureDefinition-ch-crl-communication.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/index.html/StructureDefinition-ch-crl-communication.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/index.html/StructureDefinition-ch-crl-communication.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/index.html/StructureDefinition-ch-crl-communication.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/index.html/StructureDefinition-ch-crl-communication.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/index.html/StructureDefinition-ch-crl-communication.html');
else 
  Redirect('http://fhir.ch/ig/ch-crl/index.html/StructureDefinition-ch-crl-communication.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
