<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Bundle-1-2-MedicationDispense.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Bundle-1-2-MedicationDispense.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Bundle-1-2-MedicationDispense.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Bundle-1-2-MedicationDispense.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Bundle-1-2-MedicationDispense.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Bundle-1-2-MedicationDispense.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Bundle-1-2-MedicationDispense.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
