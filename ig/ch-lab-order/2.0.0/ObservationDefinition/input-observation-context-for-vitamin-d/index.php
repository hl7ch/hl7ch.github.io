<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/ObservationDefinition-input-observation-context-for-vitamin-d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/ObservationDefinition-input-observation-context-for-vitamin-d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/ObservationDefinition-input-observation-context-for-vitamin-d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/ObservationDefinition-input-observation-context-for-vitamin-d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/ObservationDefinition-input-observation-context-for-vitamin-d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/ObservationDefinition-input-observation-context-for-vitamin-d.html');
else 
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/ObservationDefinition-input-observation-context-for-vitamin-d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
