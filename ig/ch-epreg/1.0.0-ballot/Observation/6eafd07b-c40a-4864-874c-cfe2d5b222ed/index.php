<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-6eafd07b-c40a-4864-874c-cfe2d5b222ed.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-6eafd07b-c40a-4864-874c-cfe2d5b222ed.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-6eafd07b-c40a-4864-874c-cfe2d5b222ed.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-6eafd07b-c40a-4864-874c-cfe2d5b222ed.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-6eafd07b-c40a-4864-874c-cfe2d5b222ed.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-6eafd07b-c40a-4864-874c-cfe2d5b222ed.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-6eafd07b-c40a-4864-874c-cfe2d5b222ed.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
