<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/StructureDefinition-ch-emr-observation-physical-disability.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/StructureDefinition-ch-emr-observation-physical-disability.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/StructureDefinition-ch-emr-observation-physical-disability.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/StructureDefinition-ch-emr-observation-physical-disability.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/StructureDefinition-ch-emr-observation-physical-disability.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/StructureDefinition-ch-emr-observation-physical-disability.html');
else 
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/StructureDefinition-ch-emr-observation-physical-disability.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
