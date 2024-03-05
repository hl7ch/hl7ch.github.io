<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/CodeSystem-1.3.6.1.4.1.19376.1.2.27.1.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/CodeSystem-1.3.6.1.4.1.19376.1.2.27.1.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/CodeSystem-1.3.6.1.4.1.19376.1.2.27.1.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/CodeSystem-1.3.6.1.4.1.19376.1.2.27.1.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/CodeSystem-1.3.6.1.4.1.19376.1.2.27.1.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/CodeSystem-1.3.6.1.4.1.19376.1.2.27.1.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/CodeSystem-1.3.6.1.4.1.19376.1.2.27.1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
