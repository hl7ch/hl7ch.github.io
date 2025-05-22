<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/StructureDefinition-ch-epreg-ext-note.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/StructureDefinition-ch-epreg-ext-note.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/StructureDefinition-ch-epreg-ext-note.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/StructureDefinition-ch-epreg-ext-note.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/StructureDefinition-ch-epreg-ext-note.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/StructureDefinition-ch-epreg-ext-note.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/StructureDefinition-ch-epreg-ext-note.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
