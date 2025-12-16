<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/RelatedPerson-UC1-RelatedPerson-BiologicalFather.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/RelatedPerson-UC1-RelatedPerson-BiologicalFather.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/RelatedPerson-UC1-RelatedPerson-BiologicalFather.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/RelatedPerson-UC1-RelatedPerson-BiologicalFather.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/RelatedPerson-UC1-RelatedPerson-BiologicalFather.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/RelatedPerson-UC1-RelatedPerson-BiologicalFather.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/RelatedPerson-UC1-RelatedPerson-BiologicalFather.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
