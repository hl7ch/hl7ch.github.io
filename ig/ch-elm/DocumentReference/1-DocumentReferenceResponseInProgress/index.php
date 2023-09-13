<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/DocumentReference-1-DocumentReferenceResponseInProgress.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/DocumentReference-1-DocumentReferenceResponseInProgress.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/DocumentReference-1-DocumentReferenceResponseInProgress.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/DocumentReference-1-DocumentReferenceResponseInProgress.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/DocumentReference-1-DocumentReferenceResponseInProgress.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/DocumentReference-1-DocumentReferenceResponseInProgress.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/DocumentReference-1-DocumentReferenceResponseInProgress.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
