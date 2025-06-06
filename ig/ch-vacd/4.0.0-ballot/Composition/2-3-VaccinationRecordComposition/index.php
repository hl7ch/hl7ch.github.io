<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.0-ballot/Composition-2-3-VaccinationRecordComposition.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.0-ballot/Composition-2-3-VaccinationRecordComposition.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.0-ballot/Composition-2-3-VaccinationRecordComposition.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.0-ballot/Composition-2-3-VaccinationRecordComposition.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.0-ballot/Composition-2-3-VaccinationRecordComposition.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.0-ballot/Composition-2-3-VaccinationRecordComposition.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.0-ballot/Composition-2-3-VaccinationRecordComposition.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
