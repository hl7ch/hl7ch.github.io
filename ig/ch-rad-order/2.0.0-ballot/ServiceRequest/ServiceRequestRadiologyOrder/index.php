<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ServiceRequest-ServiceRequestRadiologyOrder.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ServiceRequest-ServiceRequestRadiologyOrder.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ServiceRequest-ServiceRequestRadiologyOrder.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ServiceRequest-ServiceRequestRadiologyOrder.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ServiceRequest-ServiceRequestRadiologyOrder.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ServiceRequest-ServiceRequestRadiologyOrder.html');
else 
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ServiceRequest-ServiceRequestRadiologyOrder.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
