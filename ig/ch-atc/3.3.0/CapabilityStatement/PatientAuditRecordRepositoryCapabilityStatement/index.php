<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.html');
else 
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
