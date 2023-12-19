<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0/CodeSystem-v3-TimingEvent.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0/CodeSystem-v3-TimingEvent.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0/CodeSystem-v3-TimingEvent.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0/CodeSystem-v3-TimingEvent.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0/CodeSystem-v3-TimingEvent.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0/CodeSystem-v3-TimingEvent.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed/4.0.0/CodeSystem-v3-TimingEvent.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
