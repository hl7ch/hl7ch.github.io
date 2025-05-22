<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
