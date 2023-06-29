<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/2.0.0-ballot/Questionnaire-sdc-modular-issue126.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/2.0.0-ballot/Questionnaire-sdc-modular-issue126.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/2.0.0-ballot/Questionnaire-sdc-modular-issue126.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/2.0.0-ballot/Questionnaire-sdc-modular-issue126.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/2.0.0-ballot/Questionnaire-sdc-modular-issue126.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/2.0.0-ballot/Questionnaire-sdc-modular-issue126.html');
else 
  Redirect('http://fhir.ch/ig/ch-orf/2.0.0-ballot/Questionnaire-sdc-modular-issue126.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
