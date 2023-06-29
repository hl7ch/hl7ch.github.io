<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/StructureDefinition-ch-mhd-query-comprehensive-documentreference.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/StructureDefinition-ch-mhd-query-comprehensive-documentreference.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/StructureDefinition-ch-mhd-query-comprehensive-documentreference.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/StructureDefinition-ch-mhd-query-comprehensive-documentreference.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/StructureDefinition-ch-mhd-query-comprehensive-documentreference.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/StructureDefinition-ch-mhd-query-comprehensive-documentreference.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/StructureDefinition-ch-mhd-query-comprehensive-documentreference.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
