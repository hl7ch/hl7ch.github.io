<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/RelatedPerson-67d0e290-21b9-4255-9182-5fe9f21cdbb4.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/RelatedPerson-67d0e290-21b9-4255-9182-5fe9f21cdbb4.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/RelatedPerson-67d0e290-21b9-4255-9182-5fe9f21cdbb4.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/RelatedPerson-67d0e290-21b9-4255-9182-5fe9f21cdbb4.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/RelatedPerson-67d0e290-21b9-4255-9182-5fe9f21cdbb4.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/RelatedPerson-67d0e290-21b9-4255-9182-5fe9f21cdbb4.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/RelatedPerson-67d0e290-21b9-4255-9182-5fe9f21cdbb4.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
