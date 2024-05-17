<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationStatement-c691357a-d4f9-4906-af3a-3d63d4a1d312.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationStatement-c691357a-d4f9-4906-af3a-3d63d4a1d312.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationStatement-c691357a-d4f9-4906-af3a-3d63d4a1d312.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationStatement-c691357a-d4f9-4906-af3a-3d63d4a1d312.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationStatement-c691357a-d4f9-4906-af3a-3d63d4a1d312.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationStatement-c691357a-d4f9-4906-af3a-3d63d4a1d312.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/MedicationStatement-c691357a-d4f9-4906-af3a-3d63d4a1d312.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
