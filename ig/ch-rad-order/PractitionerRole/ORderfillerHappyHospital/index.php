<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/PractitionerRole-ORderfillerHappyHospital.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/PractitionerRole-ORderfillerHappyHospital.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/PractitionerRole-ORderfillerHappyHospital.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/PractitionerRole-ORderfillerHappyHospital.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/PractitionerRole-ORderfillerHappyHospital.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/PractitionerRole-ORderfillerHappyHospital.html');
else 
  Redirect('http://fhir.ch/ig/ch-rad-order/PractitionerRole-ORderfillerHappyHospital.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
