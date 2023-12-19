<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/2.0.10/ValueSet-DocumentEntry.typeCode.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/2.0.10/ValueSet-DocumentEntry.typeCode.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/2.0.10/ValueSet-DocumentEntry.typeCode.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/2.0.10/ValueSet-DocumentEntry.typeCode.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/2.0.10/ValueSet-DocumentEntry.typeCode.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/2.0.10/ValueSet-DocumentEntry.typeCode.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-term/2.0.10/ValueSet-DocumentEntry.typeCode.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
