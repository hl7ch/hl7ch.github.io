<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.html');
else 
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
