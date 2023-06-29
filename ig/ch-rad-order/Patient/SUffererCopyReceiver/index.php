<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/Patient-SUffererCopyReceiver.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/Patient-SUffererCopyReceiver.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/Patient-SUffererCopyReceiver.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/Patient-SUffererCopyReceiver.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/Patient-SUffererCopyReceiver.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/Patient-SUffererCopyReceiver.html');
else 
  Redirect('http://fhir.ch/ig/ch-rad-order/Patient-SUffererCopyReceiver.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
