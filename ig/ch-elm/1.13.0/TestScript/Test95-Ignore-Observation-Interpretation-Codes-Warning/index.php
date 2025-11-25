<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
