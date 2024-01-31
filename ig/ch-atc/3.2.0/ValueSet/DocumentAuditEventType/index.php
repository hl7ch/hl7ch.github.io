<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.2.0/ValueSet-DocumentAuditEventType.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.2.0/ValueSet-DocumentAuditEventType.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.2.0/ValueSet-DocumentAuditEventType.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.2.0/ValueSet-DocumentAuditEventType.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.2.0/ValueSet-DocumentAuditEventType.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.2.0/ValueSet-DocumentAuditEventType.html');
else 
  Redirect('http://fhir.ch/ig/ch-atc/3.2.0/ValueSet-DocumentAuditEventType.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
