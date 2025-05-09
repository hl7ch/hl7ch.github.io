<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1/AuditEvent-ChAuditEventmCSD1CreateExample.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1/AuditEvent-ChAuditEventmCSD1CreateExample.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1/AuditEvent-ChAuditEventmCSD1CreateExample.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1/AuditEvent-ChAuditEventmCSD1CreateExample.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1/AuditEvent-ChAuditEventmCSD1CreateExample.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1/AuditEvent-ChAuditEventmCSD1CreateExample.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-fhir/4.0.1/AuditEvent-ChAuditEventmCSD1CreateExample.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
