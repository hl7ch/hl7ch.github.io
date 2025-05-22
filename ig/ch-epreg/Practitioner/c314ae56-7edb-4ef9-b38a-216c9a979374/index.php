<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-c314ae56-7edb-4ef9-b38a-216c9a979374.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-c314ae56-7edb-4ef9-b38a-216c9a979374.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-c314ae56-7edb-4ef9-b38a-216c9a979374.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-c314ae56-7edb-4ef9-b38a-216c9a979374.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-c314ae56-7edb-4ef9-b38a-216c9a979374.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-c314ae56-7edb-4ef9-b38a-216c9a979374.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Practitioner-c314ae56-7edb-4ef9-b38a-216c9a979374.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
