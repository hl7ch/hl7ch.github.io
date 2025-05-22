<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/StructureDefinition-ch-lab-observation-egfr.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/StructureDefinition-ch-lab-observation-egfr.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/StructureDefinition-ch-lab-observation-egfr.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/StructureDefinition-ch-lab-observation-egfr.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/StructureDefinition-ch-lab-observation-egfr.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/StructureDefinition-ch-lab-observation-egfr.html');
else 
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/StructureDefinition-ch-lab-observation-egfr.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
