<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
