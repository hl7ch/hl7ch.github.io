<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/RelatedPerson-UC1-RelatedPerson-VreniMuster.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/RelatedPerson-UC1-RelatedPerson-VreniMuster.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/RelatedPerson-UC1-RelatedPerson-VreniMuster.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/RelatedPerson-UC1-RelatedPerson-VreniMuster.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/RelatedPerson-UC1-RelatedPerson-VreniMuster.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/RelatedPerson-UC1-RelatedPerson-VreniMuster.html');
else 
  Redirect('http://fhir.ch/ig/ch-emr/1.0.0-ballot/RelatedPerson-UC1-RelatedPerson-VreniMuster.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
