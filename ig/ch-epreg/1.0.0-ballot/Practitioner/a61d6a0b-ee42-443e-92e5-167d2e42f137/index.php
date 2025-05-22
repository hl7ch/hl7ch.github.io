<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-a61d6a0b-ee42-443e-92e5-167d2e42f137.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-a61d6a0b-ee42-443e-92e5-167d2e42f137.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-a61d6a0b-ee42-443e-92e5-167d2e42f137.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-a61d6a0b-ee42-443e-92e5-167d2e42f137.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-a61d6a0b-ee42-443e-92e5-167d2e42f137.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-a61d6a0b-ee42-443e-92e5-167d2e42f137.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-a61d6a0b-ee42-443e-92e5-167d2e42f137.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
