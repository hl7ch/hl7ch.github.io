<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/ImplementationGuide-ch.fhir.ig.ch-epr-mhealth.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/ImplementationGuide-ch.fhir.ig.ch-epr-mhealth.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/ImplementationGuide-ch.fhir.ig.ch-epr-mhealth.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/ImplementationGuide-ch.fhir.ig.ch-epr-mhealth.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/ImplementationGuide-ch.fhir.ig.ch-epr-mhealth.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/ImplementationGuide-ch.fhir.ig.ch-epr-mhealth.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-mhealth/3.0.0/ImplementationGuide-ch.fhir.ig.ch-epr-mhealth.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
