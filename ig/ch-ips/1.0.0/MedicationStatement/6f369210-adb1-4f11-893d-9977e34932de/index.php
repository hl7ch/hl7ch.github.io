<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
