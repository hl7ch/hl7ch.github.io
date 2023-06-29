<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/DocumentReference-DocuHospMinimum.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/DocumentReference-DocuHospMinimum.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/DocumentReference-DocuHospMinimum.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/DocumentReference-DocuHospMinimum.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/DocumentReference-DocuHospMinimum.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-crl/DocumentReference-DocuHospMinimum.html');
else 
  Redirect('http://fhir.ch/ig/ch-crl/DocumentReference-DocuHospMinimum.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
