<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/StructureDefinition-CH-ATC.ITI-81.Response.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/StructureDefinition-CH-ATC.ITI-81.Response.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/StructureDefinition-CH-ATC.ITI-81.Response.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/StructureDefinition-CH-ATC.ITI-81.Response.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/StructureDefinition-CH-ATC.ITI-81.Response.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/StructureDefinition-CH-ATC.ITI-81.Response.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/StructureDefinition-CH-ATC.ITI-81.Response.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
