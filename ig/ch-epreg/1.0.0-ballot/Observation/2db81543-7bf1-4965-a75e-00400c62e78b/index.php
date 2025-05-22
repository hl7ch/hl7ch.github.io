<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-2db81543-7bf1-4965-a75e-00400c62e78b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-2db81543-7bf1-4965-a75e-00400c62e78b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-2db81543-7bf1-4965-a75e-00400c62e78b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-2db81543-7bf1-4965-a75e-00400c62e78b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-2db81543-7bf1-4965-a75e-00400c62e78b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-2db81543-7bf1-4965-a75e-00400c62e78b.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-2db81543-7bf1-4965-a75e-00400c62e78b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
