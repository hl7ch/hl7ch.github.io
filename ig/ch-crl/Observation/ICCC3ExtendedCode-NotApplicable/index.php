<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICCC3ExtendedCode-NotApplicable.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICCC3ExtendedCode-NotApplicable.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICCC3ExtendedCode-NotApplicable.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICCC3ExtendedCode-NotApplicable.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICCC3ExtendedCode-NotApplicable.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICCC3ExtendedCode-NotApplicable.html');
else 
  Redirect('http://fhir.ch/ig/ch-crl/Observation-ICCC3ExtendedCode-NotApplicable.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
