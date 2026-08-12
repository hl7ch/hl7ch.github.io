<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/TestScript-Test98-HivInvalidCode.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/TestScript-Test98-HivInvalidCode.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/TestScript-Test98-HivInvalidCode.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/TestScript-Test98-HivInvalidCode.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/TestScript-Test98-HivInvalidCode.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/TestScript-Test98-HivInvalidCode.html');
else 
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/TestScript-Test98-HivInvalidCode.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
