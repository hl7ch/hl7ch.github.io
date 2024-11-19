<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1-ballot-2/CapabilityStatement-CH.PPQm.PolicySourceConsumer.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1-ballot-2/CapabilityStatement-CH.PPQm.PolicySourceConsumer.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1-ballot-2/CapabilityStatement-CH.PPQm.PolicySourceConsumer.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1-ballot-2/CapabilityStatement-CH.PPQm.PolicySourceConsumer.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1-ballot-2/CapabilityStatement-CH.PPQm.PolicySourceConsumer.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1-ballot-2/CapabilityStatement-CH.PPQm.PolicySourceConsumer.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1-ballot-2/CapabilityStatement-CH.PPQm.PolicySourceConsumer.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
