<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Observation-07b2e450-a62e-4734-98bf-51462f008e0f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Observation-07b2e450-a62e-4734-98bf-51462f008e0f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Observation-07b2e450-a62e-4734-98bf-51462f008e0f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Observation-07b2e450-a62e-4734-98bf-51462f008e0f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Observation-07b2e450-a62e-4734-98bf-51462f008e0f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Observation-07b2e450-a62e-4734-98bf-51462f008e0f.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0/Observation-07b2e450-a62e-4734-98bf-51462f008e0f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
