<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
