<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Encounter-8e89c502-964f-4234-9728-540d881b0380.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Encounter-8e89c502-964f-4234-9728-540d881b0380.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Encounter-8e89c502-964f-4234-9728-540d881b0380.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Encounter-8e89c502-964f-4234-9728-540d881b0380.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Encounter-8e89c502-964f-4234-9728-540d881b0380.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Encounter-8e89c502-964f-4234-9728-540d881b0380.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Encounter-8e89c502-964f-4234-9728-540d881b0380.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
