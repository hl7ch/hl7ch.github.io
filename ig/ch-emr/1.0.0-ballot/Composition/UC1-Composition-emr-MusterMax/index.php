<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/Composition-UC1-Composition-emr-MusterMax.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/Composition-UC1-Composition-emr-MusterMax.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/Composition-UC1-Composition-emr-MusterMax.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/Composition-UC1-Composition-emr-MusterMax.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/Composition-UC1-Composition-emr-MusterMax.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/Composition-UC1-Composition-emr-MusterMax.html');
else 
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/Composition-UC1-Composition-emr-MusterMax.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
