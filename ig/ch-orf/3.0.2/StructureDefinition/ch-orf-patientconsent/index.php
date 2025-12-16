<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-patientconsent.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-patientconsent.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-patientconsent.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-patientconsent.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-patientconsent.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-patientconsent.html');
else 
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-patientconsent.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
