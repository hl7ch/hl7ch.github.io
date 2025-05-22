<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
