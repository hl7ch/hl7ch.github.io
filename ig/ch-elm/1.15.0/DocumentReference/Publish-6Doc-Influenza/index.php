<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/DocumentReference-Publish-6Doc-Influenza.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/DocumentReference-Publish-6Doc-Influenza.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/DocumentReference-Publish-6Doc-Influenza.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/DocumentReference-Publish-6Doc-Influenza.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/DocumentReference-Publish-6Doc-Influenza.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/DocumentReference-Publish-6Doc-Influenza.html');
else 
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/DocumentReference-Publish-6Doc-Influenza.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
