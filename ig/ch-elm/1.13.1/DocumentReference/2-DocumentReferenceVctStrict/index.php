<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.1/DocumentReference-2-DocumentReferenceVctStrict.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.1/DocumentReference-2-DocumentReferenceVctStrict.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.1/DocumentReference-2-DocumentReferenceVctStrict.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.1/DocumentReference-2-DocumentReferenceVctStrict.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.1/DocumentReference-2-DocumentReferenceVctStrict.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.1/DocumentReference-2-DocumentReferenceVctStrict.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.13.1/DocumentReference-2-DocumentReferenceVctStrict.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
