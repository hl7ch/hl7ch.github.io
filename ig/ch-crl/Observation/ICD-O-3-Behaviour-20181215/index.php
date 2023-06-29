<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICD-O-3-Behaviour-20181215.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICD-O-3-Behaviour-20181215.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICD-O-3-Behaviour-20181215.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICD-O-3-Behaviour-20181215.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICD-O-3-Behaviour-20181215.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICD-O-3-Behaviour-20181215.html');
else 
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICD-O-3-Behaviour-20181215.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
