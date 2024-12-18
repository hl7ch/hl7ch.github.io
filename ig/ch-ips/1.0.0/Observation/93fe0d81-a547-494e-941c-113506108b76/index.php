<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Observation-93fe0d81-a547-494e-941c-113506108b76.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Observation-93fe0d81-a547-494e-941c-113506108b76.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Observation-93fe0d81-a547-494e-941c-113506108b76.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Observation-93fe0d81-a547-494e-941c-113506108b76.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Observation-93fe0d81-a547-494e-941c-113506108b76.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Observation-93fe0d81-a547-494e-941c-113506108b76.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Observation-93fe0d81-a547-494e-941c-113506108b76.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
