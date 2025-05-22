<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
