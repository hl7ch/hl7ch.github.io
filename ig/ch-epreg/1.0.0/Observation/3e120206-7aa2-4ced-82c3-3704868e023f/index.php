<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-3e120206-7aa2-4ced-82c3-3704868e023f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-3e120206-7aa2-4ced-82c3-3704868e023f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-3e120206-7aa2-4ced-82c3-3704868e023f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-3e120206-7aa2-4ced-82c3-3704868e023f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-3e120206-7aa2-4ced-82c3-3704868e023f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-3e120206-7aa2-4ced-82c3-3704868e023f.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Observation-3e120206-7aa2-4ced-82c3-3704868e023f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
