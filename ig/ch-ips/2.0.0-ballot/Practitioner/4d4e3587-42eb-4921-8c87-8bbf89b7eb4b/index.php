<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Practitioner-4d4e3587-42eb-4921-8c87-8bbf89b7eb4b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Practitioner-4d4e3587-42eb-4921-8c87-8bbf89b7eb4b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Practitioner-4d4e3587-42eb-4921-8c87-8bbf89b7eb4b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Practitioner-4d4e3587-42eb-4921-8c87-8bbf89b7eb4b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Practitioner-4d4e3587-42eb-4921-8c87-8bbf89b7eb4b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Practitioner-4d4e3587-42eb-4921-8c87-8bbf89b7eb4b.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/2.0.0-ballot/Practitioner-4d4e3587-42eb-4921-8c87-8bbf89b7eb4b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
