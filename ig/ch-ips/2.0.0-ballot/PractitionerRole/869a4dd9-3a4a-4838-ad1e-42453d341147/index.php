<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/PractitionerRole-869a4dd9-3a4a-4838-ad1e-42453d341147.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/PractitionerRole-869a4dd9-3a4a-4838-ad1e-42453d341147.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/PractitionerRole-869a4dd9-3a4a-4838-ad1e-42453d341147.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/PractitionerRole-869a4dd9-3a4a-4838-ad1e-42453d341147.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/PractitionerRole-869a4dd9-3a4a-4838-ad1e-42453d341147.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/PractitionerRole-869a4dd9-3a4a-4838-ad1e-42453d341147.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/PractitionerRole-869a4dd9-3a4a-4838-ad1e-42453d341147.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
