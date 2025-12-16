<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-4a907770-6665-4fb4-b186-afd0ddf48742.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-4a907770-6665-4fb4-b186-afd0ddf48742.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-4a907770-6665-4fb4-b186-afd0ddf48742.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-4a907770-6665-4fb4-b186-afd0ddf48742.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-4a907770-6665-4fb4-b186-afd0ddf48742.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-4a907770-6665-4fb4-b186-afd0ddf48742.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-4a907770-6665-4fb4-b186-afd0ddf48742.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
