<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-encounter.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-encounter.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-encounter.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-encounter.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-encounter.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-encounter.html');
else 
  Redirect('http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-encounter.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
