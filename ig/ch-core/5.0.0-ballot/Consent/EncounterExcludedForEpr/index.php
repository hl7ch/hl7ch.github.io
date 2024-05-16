<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0-ballot/Consent-EncounterExcludedForEpr.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0-ballot/Consent-EncounterExcludedForEpr.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0-ballot/Consent-EncounterExcludedForEpr.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0-ballot/Consent-EncounterExcludedForEpr.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0-ballot/Consent-EncounterExcludedForEpr.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-core/5.0.0-ballot/Consent-EncounterExcludedForEpr.html');
else 
  Redirect('http://fhir.ch/ig/ch-core/5.0.0-ballot/Consent-EncounterExcludedForEpr.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
