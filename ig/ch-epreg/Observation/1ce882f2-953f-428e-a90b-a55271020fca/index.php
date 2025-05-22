<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-1ce882f2-953f-428e-a90b-a55271020fca.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-1ce882f2-953f-428e-a90b-a55271020fca.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-1ce882f2-953f-428e-a90b-a55271020fca.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-1ce882f2-953f-428e-a90b-a55271020fca.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-1ce882f2-953f-428e-a90b-a55271020fca.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-1ce882f2-953f-428e-a90b-a55271020fca.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-1ce882f2-953f-428e-a90b-a55271020fca.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
