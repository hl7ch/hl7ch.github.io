<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ems/ValueSet-IVR-VS-idMedium.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ems/ValueSet-IVR-VS-idMedium.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ems/ValueSet-IVR-VS-idMedium.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ems/ValueSet-IVR-VS-idMedium.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ems/ValueSet-IVR-VS-idMedium.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ems/ValueSet-IVR-VS-idMedium.html');
else 
  Redirect('http://fhir.ch/ig/ch-ems/ValueSet-IVR-VS-idMedium.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
