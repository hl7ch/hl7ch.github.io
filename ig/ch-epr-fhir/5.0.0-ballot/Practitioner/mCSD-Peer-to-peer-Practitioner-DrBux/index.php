<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/Practitioner-mCSD-Peer-to-peer-Practitioner-DrBux.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/Practitioner-mCSD-Peer-to-peer-Practitioner-DrBux.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/Practitioner-mCSD-Peer-to-peer-Practitioner-DrBux.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/Practitioner-mCSD-Peer-to-peer-Practitioner-DrBux.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/Practitioner-mCSD-Peer-to-peer-Practitioner-DrBux.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/Practitioner-mCSD-Peer-to-peer-Practitioner-DrBux.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0-ballot/Practitioner-mCSD-Peer-to-peer-Practitioner-DrBux.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
